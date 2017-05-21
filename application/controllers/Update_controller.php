<?php

class Update_Controller extends CI_Controller {

	public function Update_table()
	{
	  
	  // Select name of table to be updated
	  if ($this->uri->segment(2, 0) == 'profile')
	  {
	  	$updating_table = 'jb_profile';
	  }

	  // Check if the user is authenticated
	  // Load the CI session library
	  $this->load->library('session');

	  // Initiate userid 
	  $userid = '0';
	  // Check if session data contains the logged_in array
	  if ($this->session->userdata('userid') != '')
	  {
	  	var_dump($this->session);
	  	$userid = $this->session->userdata('userid');
	  	echo $userid;
	  }
	  else
	  {
	  	echo "You must be logged in to update data";
	  	exit;
	  }

      //Contruct array from supplied URI
      $updating_array = $this->uri->uri_to_assoc(3);

      // Update table based on the assoc. array where userid is the supplied one in URI
      $this->db->where('userid', $userid);
      $this->db->update($updating_table, $updating_array);

      // Check if data is updated
      if ($this->db->affected_rows() == 1)
      {
      	$response = array("status" => "OK", "message" => "Data updated");
      }
      else
      {
      	$response = array("status" => "ERROR", "message" => "Data NOT updated");
      }

      // Process the output in JSON format and exit
      $this->output
              ->set_status_header(200)
              ->set_header('Cache-Control: no-store, no-cache, must-revalidate')
              ->set_content_type('application/json', 'utf-8')
              ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
              ->_display();
      exit;
    }

}
