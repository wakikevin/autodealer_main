<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Cars extends CI_Controller {

	

	//globla variables in class

	public $postdata ;

	

	function __construct(){

		

		parent::__construct();

		

		//load the commmon model

		$this->load->model('Common_model');

		$this->load->model('Users_model');

		$this->load->model('Cars_model');

		$this->postdata = $this->input;

		

	}
	
	//index
	public function index($page='searchresults'){

		//get passed parameters
		$manID = $_REQUEST['m'];
		
		if(!isset($manID)):
			$manID = 0;
		endif;
		$data['results'] = $this->Cars_model->getCars($manID);
		$data['resultsTotal'] = $this->Cars_model->totalCars($manID);

		//check if the requested page exists

		if ( ! file_exists('application/views/cars/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$data['page'] = 'add';

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

	public function add($page='add'){

		

		//check if the requested page exists

		if ( ! file_exists('application/views/cars/'.$page.'.php')):

		

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

		/*$data['yom'] = $this->Common_model->getYears();

		$data['yom'] = $this->Common_model->getYears();*/

		

		

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

		

		

		public function searchresults($page='searchresults'){

		//get passed parameters
		$manID = $_REQUEST['m'];
		
		if(!isset($manID)):
			$manID = 0;
		endif;
		$data['results'] = $this->Cars_model->getCars($manID);
		$data['resultsTotal'] = $this->Cars_model->totalCars($manID);

		//check if the requested page exists

		if ( ! file_exists('application/views/cars/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$data['page'] = 'add';

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
		
		public function car($page='car'){

		//get passed parameters
		$carID = $_REQUEST['i'];
		
		if(!isset($carID)):
			$carID = 0;
		endif;
		$data['results'] = $this->Cars_model->getCar($carID);
		$data['images'] = $this->Cars_model->getCarImages($carID);
		$data['features'] = $this->Cars_model->getCarFeatures($carID);
		$data['dealer'] = $this->Cars_model->getDealer($carID);
		$data['recent'] = $this->Common_model->getRecent(4);
		
		//$data['resultsTotal'] = $this->Cars_model->totalCars($manID);

		//check if the requested page exists

		if ( ! file_exists('application/views/cars/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$data['page'] = 'add';

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
		

		public function search($page='search'){

		

		//check if the requested page exists

		if ( ! file_exists('application/views/cars/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['page'] = 'news';
		

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

		

		

		//get models

		public function models(){

			

			//get selected manufacturer

			$manID = $_REQUEST['manID'];

			

			$models = $this->Common_model->getModels($manID);

			

			echo $models;

			

			exit();

		}

		

		

		//function to save submitted data

		public function edit(){

			

			//uploading settings

			$config['upload_path'] = 'uploads/';

			$config['allowed_types'] = 'gif|jpg|png';

			$config['max_size']	= '2048';

			$config['max_width']  = '1024';

			$config['max_height']  = '768';

			$this->upload->initialize($config);

			

			//get posted data

			$data = $this->postdata->post(NULL, TRUE);

			//$fileData = $_FILES['images'];

			

			//1. save the seller deatils and return the user id;

			$userID = $this->Users_model->createUser($data);

			//$userID =1;

			

			if($userID):

			

				//2. save car details

				$carID = $this->Cars_model->save($data,$userID);

				//$carID = 1;

				

				if($carID):

				

					//3. upload the images and save them on db

					//print_r($_FILES);

					

					

					  foreach($_FILES as $field => $file):

					  

					  //print_r($field);

						

							// No problems with the file

							if($file['error'] == 0):

							//echo $file['name'];

							

								// So lets upload

								if ($this->upload->do_upload($field))

								{

									$data = $this->upload->data();

									

									$this->Cars_model->saveImage($data['file_name'],$carID);

								}

								else

								{

									$errors = $this->upload->display_errors();

								}

							endif;

						endforeach;

						

					 redirect('cars/payment?car='.$carID, 'refresh');

				else:

				

				endif;

				

			else:

				

				

			endif;

			

			/*print_r($data);

			print_r($fileData);*/

			

		}

		

		

		//payment page

		public function payment($page = 'payment'){

			

			//get passed carID

			$carID = $_REQUEST['car'];

			$user = $this->Cars_model->getOwner($carID);

			

			//generate an order

			$order = $this->Cars_model->createInvoice($user->id,$carID);

			

			

				//check if the requested page exists

			if ( ! file_exists('application/views/cars/'.$page.'.php')):

			

				// Whoops, we don't have a page for that!

				show_404();

				

			endif;

			

			//set the page title specific for the requested page

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$data['user'] = $user;

			$data['order'] = $order;

			

			//load header

			$this->load->view('templates/header', $data);

	

			//load menu

			$this->load->view('templates/menu', $data);

			

			//load OAUth

			//$this->load->view('templates/OAuth', $data);

	

			

			//load the main page

			$this->load->view('cars/'.$page, $data);

			

				

			//load bottom footer

			$this->load->view('templates/bottom', $data);

					

			

			//load the foater

			$this->load->view('templates/footer', $data);

			

			

			

			

			

			

		}

		

		

		//payment page

		public function pesapal($page = 'pesapal'){



			

				//check if the requested page exists

			if ( ! file_exists('application/views/cars/'.$page.'.php')):

			

				// Whoops, we don't have a page for that!

				show_404();

				

			endif;

			

			//set the page title specific for the requested page

			$data['title'] = ucfirst($page); // Capitalize the first letter

			/*$data['user'] = $user;

			$data['order'] = $order;*/

			

			//load header

			$this->load->view('templates/header', $data);

	

			//load menu

			$this->load->view('templates/menu', $data);

			

			//load OAUth

			$this->load->view('templates/OAuth', $data);

	

			

			//load the main page

			$this->load->view('cars/'.$page, $data);

			

				

			//load bottom footer

			$this->load->view('templates/bottom', $data);

					

			

			//load the foater

			$this->load->view('templates/footer', $data);

			

			

		}

		

		

		//digest response from pesapal

		//payment page

		public function response(){

			

			//get passed carID

			$reference = NULL;

			$pesapal_tracking_id = NULL;

			if(isset($_REQUEST['pesapal_merchant_reference']))

			$reference = $_REQUEST['pesapal_merchant_reference'];

			if(isset($_REQUEST['pesapal_transaction_tracking_id']))

			$pesapal_tracking_id = $_REQUEST['pesapal_transaction_tracking_id'];

			

			

			//updtae an order

			$this->Cars_model->updateInvoice($reference,$pesapal_tracking_id);

			

			//redirect to homepage

			redirect('index.php', 'refresh');

		}

		

}



/* End of file pages.php */

/* Location: ./application/controllers/pages.php */