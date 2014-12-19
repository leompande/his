<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:16 AM
 */

class Client extends Eloquent{
    protected  $table = 'clients';
    protected $guarded = array('id');

    public function reservations(){
    return $this->hasMany("Reservation");
}
    public  function actions(){
        return $this->hasMany("ClientActions");
    }

    public static function getTodaysClient(){
       return DB::table('clients')->where('created_at',">",date("Y-m-d H:i:s",strtotime("-1 days")))->where('created_at',"<",date("Y-m-d H:i:s",strtotime("+1 days")))->count();
    }
    public static function getYesterdayClient(){
       return DB::table('clients')->where('created_at',">",date("Y-m-d H:i:s",strtotime("-2 days")))->where('created_at',"<=",date("Y-m-d H:i:s",strtotime("-1 days")))->count();
    }
    public static function getWeekClient(){
       return DB::table('clients')->where('created_at',">",date("Y-m-d H:i:s",strtotime("-7 days")))->where('created_at',"<",date("Y-m-d H:i:s"))->count();
    }
    public static function getMonthClient(){
       return DB::table('clients')->where('created_at',">",date("Y-m-d H:i:s",strtotime("-30 days")))->where('created_at',"<",date("Y-m-d H:i:s",strtotime("+1 days")))->count();
    }
} 