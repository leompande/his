<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.User.index');
	}


    public function create()
    {
        return View::make('system.User.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function lists()
    {
        return View::make('system.User.list');
    }


    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

       $user =  User::create(array(
            'firstname'     => Input::get("firstname"),
            'middlename'    => Input::get("middlename"),
            'lastname'      => Input::get("lastname"),
            'username'      => Input::get("username"),
            'email'         => Input::get("email")

        ));

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$user->id,
            'model'=>"User",
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
        $user = User::find($id);
        return View::make('system.User.edit',compact("user"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
        $user = User::find(Input::get("id"));
        $user->username = Input::get("username");
        $user->password = Input::get("password");
        $user->save();
        $user->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$user->id,
            'model'=>"User",
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
        $user = User::find($id);
        User::destroy($id);

        Log::create(array(
            'user_id'  => Auth::User()->id,
            'model_id' => $user->id,
            'model'    => "User",
            'action'   => "delete",
        ));
	}


}
