<?php

class BookingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Booking.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('system.Booking.add');
	}

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function lists()
	{
        return View::make('system.Booking.list');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $string_cat = "";
        foreach(Input::get("categories") as $cat){
            $string_cat.=$cat."_";
        }
        $newBooking =   Booking::create(array(
            'client_name' => Input::get("client_name"),
            'client_email' => Input::get("client_email"),
            'number_of_adults' => Input::get("number_of_adults"),
            'number_kids' => Input::get("number_kids"),
            'start_date' => Input::get("start_date"),
            'end_date' => Input::get("end_date"),
            'categories' => $string_cat
        ));
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
