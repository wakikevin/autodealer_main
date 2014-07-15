<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

//Library to get user details wherever
class Userlib {
	
	//get user if no user id get logged in user id
    public function getUser($userid = NULL)
    {
		
			//load the session class
			$ci =& get_instance();
			$ci->load->library('session');
			$ci->load->library('database');
			
			
			//check if userid is passed
			if(is_null($userid) ):
			
					//assign user id to session id
					$userid = $ci->session->userdata('userid');
			endif;
		
    }
}

/* End of file Someclass.php */