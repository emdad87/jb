<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Autoload - lib = session, DB; hlpr = url, form 

	class User_controller extends CI_Controller 
	{

		// __construct() is called on each new object created
	    function __construct() 
	    {
	        parent::__construct(); // since Loader class is instantiated in parent controller, call base contructor
	        $this->load->library('form_validation');
	        $this->load->model('user_model');
	    }
	    /******************************************************
		*
		* User Account
    	* 
    	*******************************************************/
	    // Displays user a/c details after login
	    public function account()
	    {
	        $data = array();

	        // If user is logged in for the session
	        if($this->session->userdata('isUserLoggedIn'))
	        {

	            $data['user'] = $this->user_model->getRows(array('id'=>$this->session->userdata('userId')));
	            
	            // load the user account view
	            $this->load->view('users/account_view', $data);
	        }
	        // If user not logged in, redirect to login()
	        else
	        {
	            redirect('user_controller/login');
	        }
    	}
		/******************************************************
		*
		* User Login 
    	* 
    	*******************************************************/
    	// Displays login form and signs in if user cred is valid
    	public function login()
    	{
	        $data = array();
	    
	        // If session with success_msg exists
	        if($this->session->userdata('success_msg'))
	        {
	            $data['success_msg'] = $this->session->userdata('success_msg');
	            $this->session->unset_userdata('success_msg');
	        }
	        
	        // If session with error_msg exists
	        if($this->session->userdata('error_msg'))
	        {
	            $data['error_msg'] = $this->session->userdata('error_msg');
	            $this->session->unset_userdata('error_msg');
	        }
	        
	        // 
	        if($this->input->post('loginSubmit'))
	        {
	            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	            $this->form_validation->set_rules('password', 'password', 'required');
	            
	            // If form validation passes
	            if ($this->form_validation->run() == true) 
	            {
	            	// Store user login entry details in $con
	                $con['returnType'] = 'single';
	                $con['conditions'] = array
	                (
	                    'email'=>$this->input->post('email'),
	                    'password' => md5($this->input->post('password')),
	                    'status' => '1'
	                );
	                
	                // Find user with conditions matching with user entry
	                $checkLogin = $this->user_model->getRows($con);
	                
	                // If conditions match, user entered valid cred
	                if($checkLogin)
	                {
	                    $this->session->set_userdata('isUserLoggedIn',TRUE);
	                    $this->session->set_userdata('userId',$checkLogin['id']);
	                    redirect('user_controller/account');
	                }
	                else
	                {
	                    $data['error_msg'] = 'Wrong email or password, please try again.';
	                }
	            }
	        }

	        //load the view
	        $this->load->view('users/login_view', $data);
    	}
    	/******************************************************
		*
		* User Registration
    	*
    	*******************************************************/
    	// Display user reg form and insert new user cred in db 	
    	public function registration()
    	{
	        $data = array();
	        $userInput = array(); 	

	        if($this->input->post('regisSubmit'))
	        {
	        	// Set validation rules for form fields from Post
	            $this->form_validation->set_rules('name', 'Name', 'trim|required');
	            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
	            $this->form_validation->set_rules('password', 'password', 'trim|required');
	            $this->form_validation->set_rules('conf_password', 'confirm password', 'trim|required|matches[password]');

	            // Store user input from Post
	            $userInput = array
	            (
	                'name' => strip_tags($this->input->post('name')),
	                'email' => strip_tags($this->input->post('email')),
	                'password' => md5($this->input->post('password')),
	                'gender' => $this->input->post('gender'),
	                'phone' => strip_tags($this->input->post('phone'))
	            );

	            // If input data validation is successful
	            if($this->form_validation->run() == true)
	            {
	            	// Send user input to insert() of user model
	                $insert = $this->user_model->insert($userInput);
	                
	                // if DB insert successful
	                if($insert)
	                {
	                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');

	                    redirect('user_controller/login');
	                }
	                else
	                {
	                    $data['error_msg'] = 'Some problems occured, please try again.';
	                }
	            }
	        }

	        // Error occurred so reload form with the data the user had input
	        $data['user'] = $userInput;

	        //load the view 
	        $this->load->view('users/registration_view', $data);
    	}

    	/******************************************************
		*
		* Email Check - Form Validation Callback
    	*
    	*******************************************************/
    	// Check for existing email address
    	// Extend form validation rule for Email in registration()  	
    	public function email_check($str)
    	{
	        $con['returnType'] = 'count';
	        $con['conditions'] = array('email'=>$str);
	        
	        $checkEmail = $this->user_model->getRows($con);
	        if($checkEmail > 0)
	        {
	            $this->form_validation->set_message('email_check', 'The given email already exists.');
	            return FALSE;
	        } 
	        else 
	        {
	            return TRUE;
	        }
    	}
    	/******************************************************
		*
		* User Logout
    	*
    	*******************************************************/
    	// Unset session vars and destroy it
    	public function logout()
    	{
	        $this->session->unset_userdata('isUserLoggedIn');
	        $this->session->unset_userdata('userId');
	        $this->session->sess_destroy();
	        redirect('user_controller/login');
    	}

	}

?>

