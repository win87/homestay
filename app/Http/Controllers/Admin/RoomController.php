<?php namespace App\Http\Controllers\Admin;

use App\User;
use App\Grade;
use App\Room;
use App\Host_info;
use Redirect;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RoomController extends Controller {

	public function __construct()
    {
        $this->middleware('admin');
    }

    // Show All Rooms
    public function showRooms()
    {
        $rooms = Room::paginate(10);
        //$res = User::where('user_type', 1);
        //$users = $res->get();
        //print_r($users);exit;
        $count = $rooms->count();
        return view('Admin.rooms', compact('rooms', 'count'));
    }

    // Show One Host's all Rooms
    public function showHostRooms($id)
    {
        $rooms = Room::where('user_id', $id)->paginate(10);
        $count = $rooms->count();
        //print_r($rooms);exit;
        return view('Admin.rooms', compact('rooms', 'count'));
    }

	// Show One Host's Specific One Room
    public function showOneHostOneRoom($id)
	{
		$room = Room::where('id', $id)->first();
		return view('Admin.host.room', compact('room'));
	}

}
