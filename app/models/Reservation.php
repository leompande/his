<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:30 AM
 */

class Reservation extends Eloquent {
    protected $table = 'reservations';
    protected $guarded = array('id');

    public function client(){
        return $this->belongsTo("Clinet","client_id");
    }

    public function booking(){
        return $this->hasOne("Booking","booking_id");
    }

    public function employee(){
        return $this->belongsTo('Employee','employee_id');
    }



} 