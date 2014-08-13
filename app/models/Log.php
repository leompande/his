<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 10:43 AM
 */

class Log extends Eloquent {
    protected  $table = 'logs';
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo("User","user_id");
    }

} 