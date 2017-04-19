<?php

/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 06/11/2016
 * Time: 4:13 PM
 */
class Status_m extends MY_Model
{
    public $_table = "statuses";

    public $has_many = array('notifications');
}