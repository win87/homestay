<?php namespace App\Http\Middleware;

use Redirect;
use Auth;
use Closure;

class isAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	// public function handle($request, Closure $next)
	// {
	// 	if (!Auth::check()) {
	// 		return Redirect::route('login');
	// 	} else {
	// 		if (!Auth::user()->is_admin) {
	// 			session()->flash('message_warning', '您不是管理员！无法进行相关操作');
	// 			return Redirect::route('stu_home');
	// 			//return Redirect::route('login');
	// 		}
	// 	}
	// 	return $next($request);
	// }

	public function handle($request, Closure $next)
	{
		if (!Auth::check()) {
			return Redirect::route('login');
		} else {
			if (!Auth::user()->is_admin) {
				session()->flash('message_warning', '您不是管理员！无法进行相关操作');
				
				if (Auth::user()->user_type == 1) {
					return Redirect::route('host_home');
				}
				else {
					return Redirect::route('stu_home');
				}
			}
		}
		return $next($request);
	}

}
