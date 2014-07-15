<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller class
class Users extends CI_Controller{

	
	//first function
	public function index($page = 'index'){
		
		//load the model
		$this->load->model('Users_model');
		
		//check if the requested page exists
		if ( ! file_exists('application/views/users/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//fetch data
		$manData = $this->Users_model->getUsers();
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst('users'); // Capitalize the first letter
		$data['items'] = $manData;
		
		//load header
		$this->load->view('templates/header', $data);
		
		//load menu
		$this->load->view('templates/menu', $data);

		//load the main page
		$this->load->view('users/'.$page, $data);

		//load bottom footer
		$this->load->view('templates/bottom', $data);
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
	
	//login function
	public function login(){
		
		//load the model
		$this->load->model('Users_model');
		
		$exists = $this->Users_model->login();
		
		//redirect to correct page
		if($exists):
		
			redirect('/', 'refresh');
			
		else:
			//$this->session->sess_destroy();
			//set login error
			$this->session->set_flashdata('error', 'Invalid Credentials');
			
			
			redirect('/');
			
		endif;
		
		//print_r($this->session->all_userdata());
		
		
	}//end of login
	
	//logout function
	public function logout(){
			
			//get logged in usser
			$user_id = $this->session->userdata('userid');
		
			//update db with logput 
			$updateSql = "UPDATE `idrive_users` SET `last_visit_date` =  NOW(), `is_loggedin` = 0  WHERE `id` LIKE '".$user_id."'";

			$this->db->query($updateSql);
		
			//kill session
			$this->session->sess_destroy();
			
		
		
		//redirect home
		redirect('/');
	}
	
}//end class