<?php

/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 06/11/2016
 * Time: 3:03 PM
 */
class Notification_m extends MY_Model
{
    public $_table = "notifications";

    public $belongs_to =array(
        'type' => array('model' => 'Type_m', 'primary_key' => 'type_id'),
        'status' => array('model' => 'Status_m', 'primary_key' => 'status_id'),
        'platform' => array('model' => 'Platform_m', 'primary_key' => 'platform_id'),
        'author' => array('model' => 'User_m', 'primary_key' => 'created_by')
    );
}