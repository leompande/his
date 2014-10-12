<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:24 AM
 */

class Room extends Eloquent{
    protected $table = 'rooms';
    protected $guarded = array('id');

    public function category(){
        return $this->belongsTo("RoomCategory");
    }

    public function status(){
        return $this->hasMany("RoomStatus","room_id");
    }
} 