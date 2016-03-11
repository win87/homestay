<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller {

    /**
     * 返回login视图,登录页面
     */
	public function loginGet()
    {
        return view('login');
    }

    /**
     * 登录响应
     */
    public function loginPost(Request $request)
    {
       
        $this->validate($request, User::loginRules());
        $email = $request->get('email');       
        $password = $request->get('password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password], $request->get('remember'))) {

            if (!Auth::user()->is_admin) {
                //$user = Auth::user()->select('user_type')->where('email', $email)->first();
                // $userType = Auth::user()->select('user_type')->where('email', $email)->first();
                // if ($userType->user_type == 2){
                //     return Redirect::route('stu_home');
                // }
                // else {
                //     return Redirect::route('host_home');
                // }
                flash()->success('welcome!','');
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

    /**
     * 用户登出
     */
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::route('login');
    }

}
