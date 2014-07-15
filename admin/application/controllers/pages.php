<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller class
class Pages extends CI_Controller{
	
	//first function
	public function view($page='index'){
		
		//redirect page to login page if session is not set
		$user_id = $this->session->userdata('userid');
		
		if(!$user_id):
			
			$page = "login";
			
		endif;
		
		
		//check if the requested page exists
		if ( ! file_exists('application/views/pages/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		
		//load header
		$this->load->view('templates/header', $data);
		
		//Disabe menu and bottom footer for login pages
		if($page != 'login'):
		
			//load menu
			$this->load->view('templates/menu', $data);
		
				
		endif;
		
		
		
		//load the main page
		$this->load->view('pages/'.$page, $data);
		
		
		//Disabe menu and bottom footer for login pages
		if($page != 'login'):
			
			//load bottom footer
			$this->load->view('templates/bottom', $data);
				
		endif;
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
	
}//end class