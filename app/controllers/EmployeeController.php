<?php

class EmployeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Employee.index');
	}


    public function create()
    {
        return View::make('system.Employee.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function lists()
    {
        return View::make('system.Employee.list');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
       $employee = Employee::create(array(
            'firstname'           => Input::get("firstname"),
            'middlename'          => Input::get("middlename"),
            'lastname'            => Input::get("lastname"),
            'email'               => Input::get("email"),
            'phone'               => Input::get("phone"),
            'responsibility'      => Input::get("responsibility"),
            'employement_date'    => Input::get("employement_date"),
            'birth_date'          => Input::get("birth_date"),
            'location'            => Input::get("location")

        ));

        Log::create(array(
            'user_id'  => Auth::User()->id,
            'model_id' => $employee->id,
            'model'    => "Employee",
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
        $employee = Employee::find($id);
        return View::make('system.Employee.edit',compact("employee"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        $employee = Employee::find(Input::get("id"));
        $employee->firstname = Input::get("firstname");
        $employee->middlename = Input::get("middlename");
        $employee->lastname = Input::get("lastname");
        $employee->birth_date = Input::get("birth_date");
        $employee->location = Input::get("location");
        $employee->email = Input::get("email");
        $employee->phone = Input::get("phone");
        $employee->employement_date = Input::get("employement_date");
        $employee->responsibility = Input::get("responsibility");
        $employee->save();
        $employee->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$employee->id,
            'model'=>"Employee",
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

        $employee = Employee::find($id);
        Employee::destroy($id);

        Log::create(array(
            'user_id'  => Auth::User()->id,
            'model_id' => $employee->id,
            'model'    => "Employee",
            'action'   => "delete",
        ));
	}


}
