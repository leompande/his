<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:27 AM
 */

class RoomFacility extends Eloquent {
    protected $table = 'room_facilities';
    protected $guarded = array('id');


    public function Room(){
        return $this-> belongsTo('Room','facility_id');
    }


} 