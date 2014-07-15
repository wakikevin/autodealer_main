<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller class
class Cars extends CI_Controller{
	
	//first function
	public function index($page = 'index'){
		
		//load the model
		$this->load->model('Cars_model');
		
		//check if the requested page exists
		if ( ! file_exists('application/views/cars/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//fetch data
		$manData = $this->Cars_model->getCars();
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst('cars'); // Capitalize the first letter
		$data['items'] = $manData;
		
		//load header
		$this->load->view('templates/header', $data);
		
		//load menu
		$this->load->view('templates/menu', $data);

		//load the main page
		$this->load->view('cars/'.$page, $data);

		//load bottom footer
		$this->load->view('templates/bottom', $data);
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
		
		//first function
	public function edit($page = 'edit'){
		
		//load the model
		$this->load->model('Cars_model');
		$this->load->model('Manufacturers_model');
		
		//check if the requested page exists
		if ( ! file_exists('application/views/cars/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//get any passed parameters
		$id = $_REQUEST['id'];
		
		
		//fetch data
		$manData = array();
		if(isset($id)):
			$manData = $this->Cars_model->getCars($id);
		endif;
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst('cars'); // Capitalize the first letter
		$data['items'] = $manData;
		//$data['manufacturers'] =  $this->Manufacturers_model->getManufacturers();
		
		//load header
		$this->load->view('templates/header', $data);
		
		//load menu
		$this->load->view('templates/menu', $data);

		//load the main page
		$this->load->view('cars/'.$page, $data);

		//load bottom footer
		$this->load->view('templates/bottom', $data);
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		}//end view function
		
			//first function
		/*public function add(){
			
			//load the model
			$this->load->model('Models_model');
			
			//save data
			$saved = $this->Models_model->save();
			
			if($saved):
				
				redirect($this->config->base_url('cars'),'refresh');
				
			else:
			
				redirect($this->config->base_url('cars/edit'),'refresh');
			endif;
			
		}*/
	
}//end class