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

class StuController extends Controller {

	public function __construct()
    {
        $this->middleware('admin');
    }

	// Show A Student's Profile
    public function showStuProfile($id)
    {
        $stu_info = Stu_info::where('user_id', $id)->first();

        if (empty($stu_info->fName) and empty($stu_info->phone))
        {
        	$count = 0;
        } else {
        	$count = 1;
        }

        return view('Admin.stu.profile', compact('stu_info', 'count'));
    }

    public function updateInfo(Request $request)
    {
        //$this->validate($request, Stu_info::rules());
        $stu_info = Stu_info::where('id', $request->id)->first();
        $stu_info->fName = $request->fName;
        $stu_info->lName = $request->lName;
        $stu_info->age = $request->age;
        $stu_info->gender = $request->gender;
        $stu_info->ethnicity = $request->ethnicity;
        $stu_info->occupation = $request->occupation;
        $stu_info->from = $request->from;
        $stu_info->phone = $request->phone;
        $stu_info->purpose = $request->purpose;
        $stu_info->save();
        session()->flash('message', '更新成功');
        return Redirect::back();

    }

    public function updatePreferences(Request $request)
    {
        //$this->validate($request, Stu_info::rules());
        $stu_info = Stu_info::where('id', $request->id)->first();

        $stu_info->arrival = $request->arrival;
        $stu_info->departure = $request->departure;
        $stu_info->m_price = $request->m_price;
        $stu_info->d_price = $request->d_price;
        $stu_info->service = $request->service;
        $stu_info->intro = $request->intro;
        $stu_info->save();
        session()->flash('message', '更新成功');
        return Redirect::back();
    }

    public function updateDestination(Request $request)
    {
        //$this->validate($request, Stu_info::rules());
        $stu_info = Stu_info::where('id', $request->id)->first();
        $stu_info->d_country = $request->d_country;
        $stu_info->d_state = $request->d_state;
        $stu_info->d_city = $request->d_city;
        $stu_info->d_address1 = $request->d_address1;
        $stu_info->d_address2 = $request->d_address2;
        $stu_info->d_zip = $request->d_zip;
        $stu_info->save();
        session()->flash('message', '更新成功');
        return Redirect::back();
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
