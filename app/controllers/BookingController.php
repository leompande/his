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
        $client = explode("_",Input::get("client"));
        $Booking =   Booking::create(array(
            'client_name' => $client[0],
            'client_email' => $client[1],
            'number_of_adults' => Input::get("number_of_adults"),
            'number_kids' => Input::get("number_kids"),
            'start_date' => Input::get("start_date"),
            'end_date' => Input::get("end_date"),
            'categories' => $string_cat
        ));
        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$Booking->id,
            'model'=>"Booking",
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
        $booking = Booking::find($id);
        return $booking;
	}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return View::make('system.Booking.edit',compact("booking"));
    }
    public function replace()
    {
        return View::make('system.Booking.replace');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        $string_cat = "";
        foreach(Input::get("categories") as $cat){
            $string_cat.=$cat."_";
        }
        $client = explode("_",Input::get("client"));

        $Booking = Booking::find(Input::get("id"));
        $Booking->client_name = $client[0];
        $Booking->client_email = $client[1];
        $Booking->number_of_adults = Input::get("number_of_adults");
        $Booking->number_kids = Input::get("number_kids");
        $Booking->start_date = Input::get("start_date");
        $Booking->end_date = Input::get("end_date");
        $Booking->categories = $string_cat;
        $Booking->save();
        $Booking->push();

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$Booking->id,
            'model'=>"Booking",
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
        $booking = Booking::find($id);
        Booking::destroy($id);

        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model_id'=>$booking->id,
            'model'=>"Booking",
            'action'=>"delete",
        ));
	}
	public function reserve($id)
	{

        $roomArray = array();
        $booking       = Booking::find($id);
        $categoryArray = explode("_",$booking->categories);
        $i = 0;
        foreach($categoryArray as $cat_id){
            if(!empty($cat_id)){
                $rooms = Room::whereHas('category', function($q) use ($cat_id){
                    $q->where('categories.id', $cat_id);
                })->get();
                $roomArray[$i] = $rooms;
            }
            $i++;
        }

        return View::make('system.Booking.reserve',compact(array("booking","categoryArray","roomArray")));

	}
	public function addreserve()
	{
      $data = Input::get("data");
      $dataArray = explode(",",$data);
      $room_id = $dataArray[0];
//      $category_id = $dataArray[1];
      $booking_id = $dataArray[2];

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
            'model_id'=>$booking_id,
            'model'=>"Booking",
            'action'=>"reserve",
        ));

	}


}
