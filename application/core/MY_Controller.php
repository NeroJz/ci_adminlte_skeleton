<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kumhoe.lau
 * Date: 10/10/2016
 * Time: 9:32 AM
 */
class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }
    }

}