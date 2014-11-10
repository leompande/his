<?php

class RoomController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('system.Room.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function lists()
	{
//
//
        return View::make('system.Room.list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('system.Room.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

       $room = Room::create(array(
            'room_number' => Input::get("room_number"),
            'room_phone_number' => Input::get("room_phone_number"),
            'category_id' => Input::get("category_id")
        ));

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$room->id,
            'model'=>"Room",
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
        $room = Room::find($id);
        return View::make('system.Room.edit',compact("room"));
    }


    public function reserve($id){
        $room = Room::find($id);
        $bookings = Booking::all();
        $bookingArray = Array();
        $booksCounter = 0;
        foreach($bookings as $booking){
            $cat_array = explode("_",$booking->categories);
            if(in_array($room->category_id,$cat_array)){
                $bookingArray[$booksCounter] = $booking;
                $booksCounter++;
            }
        }


        return View::make('system.Room.reserve',compact(array("bookingArray","room")));
    }

    public function addreserve()
    {
        $data = Input::get("data");
        $dataArray   = explode("_",$data);
        $booking_id  = $dataArray[0];
        $room_id     = $dataArray[1];

        $booking       = Booking::find($booking_id);
        $booking->is_reserved = 1;
        $booking->save();
        $booking->push();

        RoomStatus::create(array(
            'room_id' =>$room_id,
            'status_id' => "reserved",
            'dateregistered' => $booking->end_date,
        ));

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$room_id,
            'model'=>"Room",
            'action'=>"reserve",
        ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        $room = Room::find(Input::get("id"));
        $room->room_number = Input::get("room_number");
        $room->room_phone_number = Input::get("room_phone_number");
        $room->category_id = Input::get("category_id");
        $room->save();
        $room->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$room->id,
            'model'=>"Room",
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
        $room = Room::find($id);
        Room::destroy($id);

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$room->id,
            'model'=>"Room",
            'action'=>"delete",
        ));
	}


}
