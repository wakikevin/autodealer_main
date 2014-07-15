<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller class
class Manufacturers extends CI_Controller{
	
	//first function
	public function index($page = 'index'){
		
		//load the model
		$this->load->model('Manufacturers_model');
		
		//check if the requested page exists
		if ( ! file_exists('application/views/manufacturers/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//fetch data
		$manData = $this->Manufacturers_model->getManufacturers();
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst('manufacturers'); // Capitalize the first letter
		$data['items'] = $manData;
		
		//load header
		$this->load->view('templates/header', $data);
		
		//load menu
		$this->load->view('templates/menu', $data);

		//load the main page
		$this->load->view('manufacturers/'.$page, $data);

		//load bottom footer
		$this->load->view('templates/bottom', $data);
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
		
		//first function
	public function edit($page = 'edit'){
		
		//load the model
		$this->load->model('Manufacturers_model');
		
		//check if the requested page exists
		if ( ! file_exists('application/views/manufacturers/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//get any passed parameters
		$id = $_REQUEST['id'];
		
		
		//fetch data
		$manData = array();
		if(isset($id)):
			$manData = $this->Manufacturers_model->getManufacturers($id);
		endif;
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst('manufacturers'); // Capitalize the first letter
		$data['items'] = $manData;
		
		//load header
		$this->load->view('templates/header', $data);
		
		//load menu
		$this->load->view('templates/menu', $data);

		//load the main page
		$this->load->view('manufacturers/'.$page, $data);

		//load bottom footer
		$this->load->view('templates/bottom', $data);
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
		
			//first function
		public function add(){
			
			//load the model
			$this->load->model('Manufacturers_model');
			
			//save data
			$saved = $this->Manufacturers_model->save();
			
			if($saved):
				
				redirect($this->config->base_url('manufacturers'),'refresh');
				
			else:
			
				redirect($this->config->base_url('manufacturers/edit'),'refresh');
			endif;
			
		}
	
}//end class