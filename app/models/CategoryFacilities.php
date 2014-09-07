<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 9/7/14
 * Time: 2:52 AM
 */

class CategoryFacilities extends Eloquent {
    protected $table = 'category_facilities';
    protected $guarded = array('id');


    public function category(){
        return $this-> belongsToMany('RoomCategory');
    }


} 