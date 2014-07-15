<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pages extends CI_Controller {

	function __construct(){

		

		parent::__construct();

		

		//load the commmon model

		$this->load->model('Common_model');

		$this->load->model('Users_model');

		$this->load->model('Cars_model');

		$this->postdata = $this->input;

		

	}

	

		//first function

	public function view($page='index'){

		

		//check if the requested page exists

		if ( ! file_exists('application/views/pages/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['page'] = $page;
		
		//get common dropdowns

		$data['yom'] = $this->Common_model->getYears();

		$data['manufacturers'] = $this->Common_model->getManufacturers();

		$data['colors'] = $this->Common_model->getColors();

		$data['equipment'] = $this->Common_model->getEquipment();

		$data['bodytype'] = $this->Common_model->getBodyType();

		$data['cc'] = $this->Common_model->getCC();

		$data['drive_setup'] = $this->Common_model->getDriveSetup();

		$data['drivetype'] = $this->Common_model->getDriveTypes();

		$data['fueltype'] = $this->Common_model->getFuelTypes();

		$data['locations'] = $this->Common_model->getLocations();

		$data['conditions'] = $this->Common_model->getConditions();

		$data['counties'] = $this->Common_model->getCounties();

		$data['countries'] = $this->Common_model->getCountries();

		$data['transmission'] = $this->Common_model->getTransmission();
		
		//left sidebar
		$data['totals'] = $this->Common_model->getTotals();
		$data['recent'] = $this->Common_model->getRecent();

		
		

		//load header

		$this->load->view('templates/header', $data);



		//load menu

		$this->load->view('templates/menu', $data);



		

		//load the main page

		$this->load->view('pages/'.$page, $data);

		

			

		//load bottom footer

		$this->load->view('templates/bottom', $data);

				

		

		//load the foater

		$this->load->view('templates/footer', $data);

		

		

		}//end view function

}



/* End of file pages.php */

/* Location: ./application/controllers/pages.php */