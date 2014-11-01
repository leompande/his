<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:27 AM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Facility extends Eloquent {
//    use SoftDeletingTrait;

//    protected $dates   = ['deleted_at'];
    protected $table   = 'facilities';
    protected $guarded = array('id');


    public function category(){
        return $this-> belongsToMany('RoomCategory');
    }


} 