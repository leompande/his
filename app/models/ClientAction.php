<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:19 AM
 */

class ClientAction extends Eloquent {
    protected $table = 'client_actions';
    protected $guarded = array('id');

    public function client(){
        return $this->belongsTo('Client','client_id');
    }


} 