<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Host_info extends Model {

	protected $table = 'host_infos';

    protected $fillable = [
        'fName', 
        'lName',
        'gender',
        'age',
        'ethnicity',
        'occupation',
        'phone',
        'mobile',
        'language'
  	];   
  

    protected static function update_info_rules(){
        return [
            'fName' => 'required|max:20',
            'lName' => 'required|max:20',
            'gender' => 'required',
            'age' => 'required|digits_between:0,2',
            'ethnicity' => 'required',
            'occupation' => 'required',
            'phone' => 'required|min:7|max:11',
            ];
    }

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}
