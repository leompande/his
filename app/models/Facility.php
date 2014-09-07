<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:27 AM
 */

class Facility extends Eloquent {
    protected $table = 'facilities';
    protected $guarded = array('id');


    public function category(){
        return $this-> belongsToMany('RoomCategory');
    }


} 