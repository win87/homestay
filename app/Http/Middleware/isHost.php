<?php namespace App\Http\Middleware;

use Redirect;
use App\User;
use App\Room;
use Auth;
use Closure;

class isHost {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		//if (Auth::user()->user_type == 1) {
		if (Auth::user()->user_type == 1 or Auth::user()->is_admin == 1) {
			return $next($request);

		}
		//return $next($request);
		
		session()->flash('message_warning', '你的账户无法进行相关操作, 请重新登录');
		
		return Redirect::route('login');
	}

}
