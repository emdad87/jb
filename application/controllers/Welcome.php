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
		//$this->load->view('welcome_message');
		//$this->load->view('welcome_view');
		$this->load->view('debug_view');
	}

	public function showLanding()
	{
		$this->load->view('welcome_view');
	}

	public function showUserDash()
	{
		$this->load->view('userDash_view');
	}

	public function showUserProfile($userid)
	{
		// Load user details from jb_profile table
		$this->load->model('model_profile');
    	$user_details = $this->model_profile->get_name($userid);

    	// Calculate the Age
    	$from = new DateTime($user_details['date_of_birth']);
        $to = new DateTime('today');
        $user_details['age'] = $from->diff($to)->y;
 		
 		// Load the view
    	$this->load->view('userProfile_view', $user_details);
	}


}
