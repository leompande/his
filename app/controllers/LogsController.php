<?php

class LogsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function lists($id){
         $logedItem = explode("_",$id);
        if(count($logedItem)==2){
            $logs = DB::select('select * from logs where model = ? and model_id = ? ORDER  BY created_at DESC', array($logedItem[0],$logedItem[1]));

        }

        return View::make("system.Logs.list",compact("logs"));
	}
    public function fullLog($id){

            $logs = DB::select('select * from logs where  user_id = ? ORDER  BY created_at DESC', array($id));

        return View::make("system.Logs.list",compact("logs"));
	}

}
