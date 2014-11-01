<?php

class ClientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Client.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function lists()
	{
        return View::make('system.Client.list');
	}
    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('system.Client.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

          $client =  Client::create(array(
            'firstname' => Input::get("firstname"),
            'middlename' => Input::get("middlename"),
            'lastname' => Input::get("lastname"),
            'email' => Input::get("email"),
            'phone' => Input::get("phone"),
            'nationality' => Input::get("nationality")

        ));

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$client->id,
            'model'=>"Client",
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
	{   $client = Client::find($id);
        return View::make('system.Client.edit',compact("client"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        $client = Client::find(Input::get("id"));
        $client->firstname = Input::get("firstname");
        $client->middlename = Input::get("middlename");
        $client->lastname = Input::get("lastname");
        $client->save();
        $client->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$client->id,
            'model'=>"Client",
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
        $client = Client::find($id);
        Client::destroy($id);

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$client->id,
            'model'=>"Client",
            'action'=>"delete",
        ));
	}


}
