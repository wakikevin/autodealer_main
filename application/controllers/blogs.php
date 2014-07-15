<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
		//first function
	public function blog($page='blog'){
		
		//check if the requested page exists
		if ( ! file_exists('application/views/blogs/'.$page.'.php')):
		
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
		$this->load->view('blogs/'.$page, $data);
		
			
		//load bottom footer
		$this->load->view('templates/bottom', $data);
				
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		
		}//end view function
			//first function
	public function page($page='page'){
		
		//check if the requested page exists
		if ( ! file_exists('application/views/blogs/'.$page.'.php')):
		
			// Whoops, we don't have a page for that!
			show_404();
			
		endif;
		
		//set the page title specific for the requested page
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['page'] = 'blog';
		
		//load header
		$this->load->view('templates/header', $data);

		//load menu
		$this->load->view('templates/menu', $data);

		
		//load the main page
		$this->load->view('blogs/'.$page, $data);
		
			
		//load bottom footer
		$this->load->view('templates/bottom', $data);
				
		
		//load the foater
		$this->load->view('templates/footer', $data);
		
		
		}//end view function
		
		
		
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */