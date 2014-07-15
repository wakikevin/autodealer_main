<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Page extends CI_Controller {


	function __construct(){
	
			
	
			parent::__construct();
	
			
	
			//load the commmon model
	
			$this->load->model('Common_model');
	
			$this->load->model('Users_model');
	
			$this->load->model('Cars_model');
	
			$this->postdata = $this->input;
	
			
	
		}
	

		//first function

	public function about($page='about'){

		

		//check if the requested page exists

		if ( ! file_exists('application/views/page/'.$page.'.php')):

		

			// Whoops, we don't have a page for that!

			show_404();

			

		endif;

		

		//set the page title specific for the requested page

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['page'] = $page;

		

		//load header

		$this->load->view('templates/header', $data);



		//load menu

		$this->load->view('templates/menu', $data);



		

		//load the main page

		$this->load->view('page/'.$page, $data);

		

			

		//load bottom footer

		$this->load->view('templates/bottom', $data);

				

		

		//load the foater

		$this->load->view('templates/footer', $data);

		

		

		}//end view function

		

		

		public function contacts($page='contacts'){

		

			//check if the requested page exists

			if ( ! file_exists('application/views/page/'.$page.'.php')):

			

				// Whoops, we don't have a page for that!

				show_404();

				

			endif;

			

			//set the page title specific for the requested page

			$data['title'] = ucfirst($page); // Capitalize the first letter
			$data['page'] = $page;
			

			//load header

			$this->load->view('templates/header', $data);

	

			//load menu

			$this->load->view('templates/menu', $data);

	

			

			//load the main page

			$this->load->view('page/'.$page, $data);

			

				

			//load bottom footer

			$this->load->view('templates/bottom', $data);

					

			

			//load the foater

			$this->load->view('templates/footer', $data);

		

		

		}//end view function

}



/* End of file pages.php */

/* Location: ./application/controllers/pages.php */