<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'gallery';

    protected $fillable = [
                'room_id',
                'path'
    ];

    protected static function rules(){
        return [
            // 'title' => 'required',
            // 'room_type' => 'required',
            ];
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }


}


