<?php

if(!defined('BASEPATH')) exit("No direct script access allowed");

require_once APPPATH . "/third_party/Classes/PHPExcel.php";

/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 09/10/16
 * Time: 3:33 PM
 */
class Excel extends PHPExcel
{

    public function __construct(){
        parent::__construct();
    }

}