<?php namespace App\Http\Controllers\Host;

use Auth;
use Redirect;
use App\User;
use App\Host_info;
use App\Http\Requests\HostMesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use File;
use Input;
use Validator;
use Response;


class HostController extends Controller {

	/**
     * 只允许登录用户访问
     */
    public function __construct()
    {

        $this->middleware('auth');
        
        $this->middleware('host');

    }

    /**
     * 返回Host主页
     */
	public function profile()
    {
        $user_id = Auth::user()->id;
        $res = Host_info::where('user_id', $user_id);
        $host_info = $res->get()->first();
        $host_info->language = explode(",", $host_info->language);
        return view('host.profile', compact('host_info'));
    }

    public function profile_photo()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        return view('host.profile_photo', compact('user'));
    }

    public function addProfilePhoto($id, Request $request)
    {

        $input = Input::all();
 
        $rules = array(
            //'file' => 'image|max:3000',
            'file' => 'required|mimes:jpg,jpeg,png,bmp|max:3000',
        );
 
        $validation = Validator::make($input, $rules);
 
        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'uploads/users/' . $id; // upload path

        if (!file_exists($destinationPath)) {
            $gallery_folder_path = File::makeDirectory($destinationPath, 0777, true, true);
            $distinationPath = $gallery_folder_path;
        }

        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = rand(100, 999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

        $user = User::where('id', $id)->first();
        $user->photo = "uploads/users/{$id}/{$fileName}";
        $user->update();
 
        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }


    /**
     * 返回修改资料页面
     * @return [type] [description]
     */
    public function edit()
    {
        return view('host.edit');
    }

    public function update(HostMesRequest $request)
    {
        Auth::user()->update($request->all());

        session()->flash('message', '个人信息修改成功');

        return Redirect::route('host_home');
    }


    public function update_info(Request $request)
    {
        $this->validate($request, Host_info::update_info_rules());     
        $info = Host_info::where('id', $request->user_id)->first();

        if (!empty($request->get('language'))) {
            $languageString = implode(",", $request->get('language'));
            $info->language = $languageString;
        } else {
            $info->language = $request->get('language');
        }

        $info->fName = $request->fName;
        $info->lName = $request->lName;
        $info->gender = $request->gender;
        $info->ethnicity = $request->ethnicity;
        $info->age = $request->age;
        $info->occupation = $request->occupation;
        $info->phone = $request->phone;

        $info->save();
        
        session()->flash('message', 'Saved!');
        return Redirect::back();
    }

}


