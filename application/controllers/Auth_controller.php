<?php

Class Auth_Controller extends CI_Controller 
{
  public function __construct() 
  {
    parent::__construct();
    // Load session library
    $this->load->library('session');
  	// Process the output in JSON format and exit
    $this->output
            ->set_status_header(200)
            ->set_header('Cache-Control: no-store, no-cache, must-revalidate')
            ->set_content_type('application/json', 'utf-8')
            ->_display();
  }

  public function login_test($userid)
  {

  	$session_array = array(
      'userid' => $userid,
    );

  	// Add user data in session
    $this->session->set_userdata($session_array);
    echo "Logged in ...";
  }

  // Logout from admin page
  public function logout() 
  {

    // Removing session data
    $session_array = array(
      'userid' => ''
    );
    $this->session->unset_userdata($session_array);
    $this->session->sess_destroy();

    echo "Logged out ...";
  }

  // Print Auth Status
  public function status()
  {
  	var_dump($this->session);
  }

  public function login()
  {
    $data = array(
    'user_name' => $this->input->post('email'),
    'password' => $this->input->post('password')
    );

    var_dump($data);

    // Check if session exist
      // if it does redirect to dashboard
    // else
      // Run the code blob
        // Check/Validate the post value received
        // if post value if good
          // load the db mode
          // Check db and see if the user/pass exist
          // if value exist
            // Start users session and inject details in session data
          // else
            // Redirect back to login page
        // else (if post value is not good)
          // Redirect back to login page
      // END of code blob
  }

}