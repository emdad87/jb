<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('debug_view');
	}

	public function show_landing_view()
	{
		$this->load->view('landing_view');
	}

	public function show_user_details_form()
	{
		$this->load->view('user_details_form_view');
	}

	public function show_user_dash()
	{
		$this->load->view('user_dash_view');
	}

	public function show_user_profile_others($userid)	// feed userId as parameter - test user id = 1
	{
		// Test user ID 
		//$userid = 1;

		// Load user details from jb_profile table
		$this->load->model('model_profile');
    	$user_details = $this->model_profile->get_name($userid);

    	// Calculate the Age
    	$from = new DateTime($user_details['date_of_birth']);
        $to = new DateTime('today');
        $user_details['age'] = $from->diff($to)->y;
 		
 		// Load the view
    	$this->load->view('user_profile_others_view', $user_details);
	}

	public function show_user_profile_self()
	{

		// Test user ID 
		$userid = 1;

		// Load user details from jb_profile table
		$this->load->model('model_profile');
    	$user_details = $this->model_profile->get_name($userid);

    	// Calculate the Age
    	$from = new DateTime($user_details['date_of_birth']);
        $to = new DateTime('today');
        $user_details['age'] = $from->diff($to)->y;

        
		$this->load->view('user_profile_self_view', $user_details);
	}




}
