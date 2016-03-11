<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	protected $table = 'rooms';

    protected $fillable = [
        'title',     
        'room_type',  
        'bed_type',        
        'intro',    
    ];

    protected static function rules(){
        return [
            // 'title' => 'required',
            // 'room_type' => 'required',
            ];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

}
