<?php

class ReportController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        Log::create(array(
            'user_id'=>Auth::User()->id,
            'model'=>"Report",
            'action'=>"view report",
        ));
        return View::make('system.Report.index');
	}
    
/**
	 * Display a option menu for room report.
	 *
	 * @return Response
	 */
	public function roomview()
	{
        return View::make('system.Report.room');
	}
    public function bookingview()
	{
        return View::make('system.Report.booking');
	}
    public function reservationview()
	{
        return View::make('system.Report.reservation');
	}
    public function generalview()
	{
        return View::make('system.Report.general');
	}


}
