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
} 