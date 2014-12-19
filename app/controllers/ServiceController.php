<?php

class ServiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Services.index');
	}



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function lists()
    {
        return View::make('system.Services.list');
    }




    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('system.Services.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $service = Service::create(array(
            'service_name'           => Input::get("service_name"),
            'service_category_id'            => Input::get("service_category_id"),
            'price'                  => Input::get("service_price"),

        ));

        Log::create(array(
            'user_id'  => Auth::User()->id,
            'model_id' => $service->id,
            'model'    => "Service",
            'action'   => "create",
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
