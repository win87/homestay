<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * 登录验证规则
	 * @return [type] [description]
	 */
	protected static function registerRules()
	{
		return [
			'email' => 'required|unique:users|email',
            'user_type' => 'required'
            ];
	}

	protected static function loginRules()
	{
		return [
			'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            ];
	}


	/**
	 * grades表中的每行数据都有对应的一个用户
	 * @return [type] [description]
	 */
	public function grade()
	{
		return $this->hasOne('App\Grade');
	}

	/**
	 * 
	 * @return [type] [description]
	 */
	public function room()
	{
		return $this->hasMany('App\Room');
	}

	/**
	 * host_info表中的每行数据都有对应的一个用户
	 * @return [type] [description]
	 */
	public function host_info()
	{
		return $this->hasOne('App\Host_info');
	}

	/**
	 * stu_info表中的每行数据都有对应的一个用户
	 * @return [type] [description]
	 */
	public function stu_info()
	{
		return $this->hasOne('App\stu_info');
	}



}
