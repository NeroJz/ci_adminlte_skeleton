<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Config for Firebase
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 16/10/2016
 * Time: 3:41 PM
 */


$config['api_key'] = ''; //Server Key of the Firebase Apps
$config['authDomain'] = ''; //Domain name of the Firebase APPS
$config['databaseURL'] = '';  //Database URI of the Firebase APPS
$config['storageBucket'] = '';


//URL for FCM
$config['firebase_send_url'] = 'https://fcm.googleapis.com/fcm/send';
$config['content_type'] = 'application/json';
