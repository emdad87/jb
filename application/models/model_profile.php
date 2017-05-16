<?php

  class Model_profile extends CI_Model {
  
  	public function get_name($userid) {
  		if($userid != FALSE) {
  			$query = $this->db->get_where('jb_profile', array('userid' => $userid));
  			return $query->row_array();
  		}
  		else {
  			return FALSE;
  		}
  	}

  }


?>