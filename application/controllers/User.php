<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: kumhoe.lau
 * Date: 9/20/2016
 * Time: 7:46 PM
 */
class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active'] = 'user';
        $data['title'] = 'Admin';
        $data['breadcrumb'] = 'System Users';

        /* load JS */
        $data['scripts'] = array(
            'user/users'
        );

        $page['users'] = $this->ion_auth->users()->result(array(1,2));

        $data['content'] = $this->load->view('user/index', $page, TRUE);

        $this->load->view('main', $data);
    }

    public function delete(){
        $id = $this->uri->segment(3);

        if($this->ion_auth->delete_user($id)){
            $this->session->set_flashdata('success', "User is successfully deleted");
        }else{
            $this->session->set_flashdata('danger', "Failed to delete user");
        }

        redirect('user', 'refresh');
    }

}