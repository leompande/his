<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:27 AM
 */

class RoomCategory extends Eloquent {
    protected $table = 'categories';
    protected $guarded = array('id');

    public function rooms(){
        return $this->hasMany("Room","category_id");
    }
    public function categoryFacilities(){
        return $this->hasMany("CategoryFacilities","category_id");
    }


} 