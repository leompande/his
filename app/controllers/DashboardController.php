<?php

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return View::make('system.Dashboard.index');

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

    public function chartQuery()
	{
        $allArray = Array();

        $bookingsArray = array('Jan'=>0, 'Feb'=>0, 'March'=>0,
            'April'=>0, 'May'=>0, 'June'=>0,
            'July'=>0, 'Aug'=>0, 'Sept'=>0,
            'Oct'=>0, 'Nov'=>0, 'Dec'=>0);
        $customersArray = array('Jan'=>0, 'Feb'=>0, 'March'=>0,
            'April'=>0, 'May'=>0, 'June'=>0,
            'July'=>0, 'Aug'=>0, 'Sept'=>0,
            'Oct'=>0, 'Nov'=>0, 'Dec'=>0);
        $reservationsArray = array('Jan'=>0, 'Feb'=>0, 'March'=>0,
            'April'=>0, 'May'=>0, 'June'=>0,
            'July'=>0, 'Aug'=>0, 'Sept'=>0,
            'Oct'=>0, 'Nov'=>0, 'Dec'=>0);
        $bookings = DB::select('select DATE_FORMAT(created_at, "%m") as date, count(id) as data from bookings where (created_at between  DATE_FORMAT(NOW() ,"%Y") AND NOW() )  GROUP BY DATE_FORMAT(created_at, "%Y%m") ORDER BY DATE_FORMAT(created_at, "%Y%m") ASC');
        $customers = DB::select('select DATE_FORMAT(created_at, "%m") as date, count(id) as data from clients where (created_at between  DATE_FORMAT(NOW() ,"%Y") AND NOW() )  GROUP BY DATE_FORMAT(created_at, "%Y%m") ORDER BY DATE_FORMAT(created_at, "%Y%m") ASC');
        $reservations = DB::select('select DATE_FORMAT(created_at, "%m") as date, count(id) as data from bookings where (created_at between  DATE_FORMAT(NOW() ,"%Y") AND NOW() ) and is_reserved=1 GROUP BY DATE_FORMAT(created_at, "%Y%m") ORDER BY DATE_FORMAT(created_at, "%Y%m") ASC');
        foreach($bookings as $booking){
            $booking->date;
            if($booking->date=="01"){
                $bookingsArray['Jan'] = $booking->data;
            }elseif($booking->date=="02"){
                $bookingsArray['Feb'] = $booking->data;
            }elseif($booking->date=="03"){
                $bookingsArray['March'] = $booking->data;
            }elseif($booking->date=="04"){
                $bookingsArray['April'] = $booking->data;
            }elseif($booking->date=="05"){
                $bookingsArray['May'] = $booking->data;
            }elseif($booking->date=="06"){
                $bookingsArray['June'] = $booking->data;
            }elseif($booking->date=="07"){
                $bookingsArray['July'] = $booking->data;
                $bookingsArray['July'] = $booking->data;
            }elseif($booking->date=="08"){
                $bookingsArray['Aug'] = $booking->data;
            }elseif($booking->date=="09"){
                $bookingsArray['Sept'] = $booking->data;
            }elseif($booking->date=="10"){
                $bookingsArray['Oct'] = $booking->data;
            }elseif($booking->date=="11"){
                $bookingsArray['Nov'] = $booking->data;
            }elseif($booking->date=="12"){
                $bookingsArray['Dec'] = $booking->data;
            }

        }
        foreach($customers as $customer){
            $customer->date;
            if($customer->date=="01"){
                $customersArray['Jan'] = $customer->data;
            }elseif($customer->date=="02"){
                $customersArray['Feb'] = $customer->data;
            }elseif($customer->date=="03"){
                $customersArray['March'] = $customer->data;
            }elseif($customer->date=="04"){
                $customersArray['April'] = $customer->data;
            }elseif($customer->date=="05"){
                $customersArray['May'] = $customer->data;
            }elseif($customer->date=="06"){
                $customersArray['June'] = $customer->data;
            }elseif($customer->date=="07"){
                $customersArray['July'] = $customer->data;
            }elseif($customer->date=="08"){
                $customersArray['Aug'] = $customer->data;
            }elseif($customer->date=="09"){
                $customersArray['Sept'] = $customer->data;
            }elseif($customer->date=="10"){
                $customersArray['Oct'] = $customer->data;
            }elseif($customer->date=="11"){
                $customersArray['Nov'] = $customer->data;
            }elseif($customer->date=="12"){
                $customersArray['Dec'] = $customer->data;
            }

        }
        foreach($reservations as $reservation){
            $reservation->date;
            if($reservation->date=="01"){
                $reservationsArray['Jan'] = $reservation->data;
            }elseif($reservation->date=="02"){
                $reservationsArray['Feb'] = $reservation->data;
            }elseif($reservation->date=="03"){
                $reservationsArray['March'] = $reservation->data;
            }elseif($reservation->date=="04"){
                $reservationsArray['April'] = $reservation->data;
            }elseif($reservation->date=="05"){
                $reservationsArray['May'] = $reservation->data;
            }elseif($reservation->date=="06"){
                $reservationsArray['June'] = $reservation->data;
            }elseif($reservation->date=="07"){
                $reservationsArray['July'] = $reservation->data;
            }elseif($reservation->date=="08"){
                $reservationsArray['Aug'] = $reservation->data;
            }elseif($reservation->date=="09"){
                $reservationsArray['Sept'] = $reservation->data;
            }elseif($reservation->date=="10"){
                $reservationsArray['Oct'] = $reservation->data;
            }elseif($reservation->date=="11"){
                $reservationsArray['Nov'] = $reservation->data;
            }elseif($reservation->date=="12"){
                $reservationsArray['Dec'] = $reservation->data;
            }

        }


       $allArray = Array("bookings"=>$bookingsArray,"customerarrival"=>$customersArray,"reservations"=>$reservationsArray);
        return $allArray;

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
