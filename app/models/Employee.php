<?php
/**
 * Created by PhpStorm.
 * User: mpande
 * Date: 8/8/14
 * Time: 9:29 AM
 */

class Employee extends  Eloquent {
    protected $table = 'employees';
    protected $guarded = array('id');
} 