<?php namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\Grade;
use App\Room;
use App\Host_info;
use App\Stu_info;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller {

	/**
     * 返回register视图,登录页面
     */
	public function registerGet()
    {
        return view('register');
    }

    /**
     * 注册响应
     */
    public function registerPost(Request $request)
    {
       
        $this->validate($request, [
        	'email'        => 'required|unique:users',
        	'password'     => 'required|min:6|max:20',
            'user_type'    => 'required'
        	]);

        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
       
        $user->save();

        // Add new blank row in grades table
        $grade = new Grade;
        $id = User::where('email', $user->email)->first();
        $grade->user_id = $id->id;
        $grade->save();

        // Add new blank row in host_infos table
        $host_info = new Host_info;
        $id = User::where('email', $user->email)->first();
        $host_info->user_id = $id->id;
        $host_info->language = 'English';
        $host_info->save();

        // Add new blank row in stu_infos table
        $stu_info = new Stu_info;
        $id = User::where('email', $user->email)->first();
        $stu_info->user_id = $id->id;
        $stu_info->save();
        
        //session()->flash('message', $user->email."Register sucessfully!");
        
        $email = $request->get('email');       
        $password = $request->get('password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password], $request->get('remember'))) {     
            if (!Auth::user()->is_admin) {
                return Redirect::route('welcome');
            } else {
                return Redirect::action('Admin\AdminController@index');
            }

            } else {
                return Redirect::route('login')
                    ->withInput()
                    ->withErrors('Email or Password is incorrect, please try again!');
            }
    }

}
