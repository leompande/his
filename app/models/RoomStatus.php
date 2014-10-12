<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:28 AM
 */

class RoomStatus extends Eloquent {
    protected $table = 'room_status';
    protected $guarded = array('id');

    public function Room(){
        return $this->hasMany("Room");
    }
} 