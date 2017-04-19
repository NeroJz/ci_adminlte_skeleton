<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['active'] = 'dashboard'; # indicates the activated tab on sidebar.php
        $data['title'] = 'Admin';	# tells the title of current page on header.php
        $data['breadcrumb'] = 'Dashboard'; # breadcrumb on header.php

        /* load JS */
        /*
         * Import the JS file to main.php
         * the JS file is located on assets/js folder
         */
        $data['scripts'] = array(
            'dashboard/messages'
        );

        /** load the view **/
		$data['content'] = $this->load->view('dashboard/index', '', TRUE);

		$this->load->view('main', $data);
	}
}
