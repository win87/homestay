<?php namespace App\Http\Controllers\Admin;

use App\User;
use App\Grade;
use App\Room;
use App\Host_info;
use App\Stu_info;
use Redirect;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $result = User::where('is_admin', 0);
        $count = $result->count();
        $users = $result->paginate(10);
        return view('Admin.index', compact('users', 'count'));
    }

    public function search(Request $request)
    {
        return $request->all();
    }

    // Open create user form
    public function create(){
        $result = User::where('is_admin', 0);
        $count = $result->count();
        return view('Admin.create', compact('count'));
    }

    // Save new user to user table
    public function store(Request $request)
    {
        $this->validate($request, [
                        'user_type' => 'required',
                        'email' => 'required|email|unique:users']);
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->user_type = $request->user_type;
        $user->password = Hash::make('123123');
        $user->save();       
        session()->flash('message', $user->name."Added successfully");     
        
        // Add new blank row in grades table
        $grade = new Grade;
        $id = User::where('email', $user->email)->first();
        $grade->user_id = $id->id;
	    $grade->save();

        // Add new blank row in host_infos table
        $host_info = new Host_info;
        $id = User::where('email', $user->email)->first();
        $host_info->user_id = $id->id;
        $host_info->save();

        // Add new blank row in stu_infos table
        $stu_info = new Stu_info;
        $id = User::where('email', $user->email)->first();
        $stu_info->user_id = $id->id;
        $stu_info->save();
        
        return Redirect::to('admin');
    }

    public function destroy(User $user)
    {
        $name = $user->name;
        $user->delete();
        session()->flash('message', $name."同学已经被移除");
        return Redirect::back();
    }

    public function upload_grade(Request $request)
    {
        $this->validate($request, Grade::rules());
        $grade = Grade::where('user_id', $request->user_id)->first();
        $grade->math = $request->math;
        $grade->english = $request->english;
        $grade->c = $request->c;
        $grade->sport = $request->sport;
        $grade->think = $request->think;
        $grade->soft = $request->soft;
        $grade->save();
        session()->flash('message', '成绩提交成功');
        return Redirect::back();
    }

    // Show all host users
    public function showHosts()
    {
        $res = User::where('user_type', 1);
        $count = $res->count();
        $users = $res->paginate(10);
        return view('Admin.host.list', compact('users', 'count'));
    }

    // Show all student users
    public function showStus()
    {
        $res = User::where('user_type', 2);
        $count = $res->count();
        $users = $res->paginate(10);
        return view('Admin.stu.list', compact('users', 'count'));
    }


    // Show A Host's Profile
    public function showHostProfile($id)
    {
        $host_info = Host_info::where('user_id', $id)->first();

        $count = $host_info->count();

        return view('Admin.host.profile', compact('host_info', 'count'));
    }


}
