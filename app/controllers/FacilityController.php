<?php

class FacilityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Facility.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function lists(){
        return View::make('system.Facility.list');
	}
    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('system.Facility.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $facility = Facility::create(array(
            'facility' => Input::get("facility_name")
        ));

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$facility->id,
            'model'=>"Facility",
            'action'=>"create",
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
		$facility = Facility::find($id);
        return View::make('system.Facility.edit',compact("facility"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        $facility = Facility::find(Input::get("id"));
        $facility->facility = Input::get("facility");
        $facility->save();
        $facility->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$facility->id,
            'model'=>"Facility",
            'action'=>"update",
        ));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $facility = Facility::find($id);
        Facility::destroy($id);

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$facility->id,
            'model'=>"Facility",
            'action'=>"delete",
        ));
	}


}
