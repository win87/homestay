<?php namespace App\Http\Controllers;

use Auth;
use Upload;
use Input;
use Validator;
use Redirect;
use Session;
use Illuminate\Http\Request;

class uploadController extends Controller {

  public function upload(Request $request) {
    // getting all of the post data
    $file = array('image' => Input::file('image'));
    // setting up rules
    $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
    // doing the validation, passing post data, rules and the messages
    $validator = Validator::make($file, $rules);
    if ($validator->fails()) {
      // send back to the page with the input data and errors
      return Redirect::to('upload')->withInput()->withErrors($validator);
    }
    else {
      // checking file is valid.
      if (Input::file('image')->isValid()) {
        $destinationPath = 'uploads/zw'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        Session::flash('success', 'Upload successfully'); 
        $path = Input::file('image')->getRealPath();
        $name = Input::file('image')->getClientOriginalName();
        $extension = Input::file('image')->getClientOriginalExtension();
        //var_dump($size);exit;

        $room_id = $request->user_id;

      
        $gallery = new \App\Upload;
        $gallery->room_id = $room_id;
        $gallery->path = $fileName;

        //print_r($gallery);exit;

        $gallery->save();

        return Redirect::to('host/room/'.$room_id);
      }
      else {
        // sending back with error message.
        Session::flash('error', 'uploaded file is not valid');
        return Redirect::back();
      }
    }
  }

    public function show(){
      echo "123";exit;
    }



}


    // $this->validate($request, [
    //         //'id' => 'required|digits:4|unique:users',
    //         //'email' => 'required',
    //         ]);
    // $user_id = Auth::user()->id;
    //     $room = new Room; 
    //     $room->user_id = $user_id;  
    //     $room->room_type = $request->room_type;
    //     $room->house_type = $request->house_type;
    //     $room->city = $request->city;
    //     $room->save();  
    //     $id = $room->id;   
    //     session()->flash('message', $room->title."添加成功, 请继续完善房源信息");     
    //     return Redirect::to('host/room/'.$id);