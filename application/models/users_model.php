<?php 

//prevent direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public $DB;
	
	function __construct()
    {
        parent::__construct();
		
		//instantiate db function
		$this->DB = $this->db;
    }
	
	//create the user in Database & email login Details
	public function createUser($data){
		
			//get posted data
			$password = MD5($data['seller_password']);
			$sellerData = array('password'=>$password,
								'name'=>$data['seller_name'],
								'email'=>$data['seller_email'],
								'phone'=>$data['seller_phone'],
								'phone1'=>$data['seller_phone1'],
								'city'=>$data['seller_city'],
								'country_id'=>$data['country'],
								'county_id'=>$data['county'],
								'region'=>$data['seller_region'],
								'role'=>5,
								'state'=>1);
								
			//make actual insert
			$this->DB->insert('idrive_users', $sellerData); 
			
			//get the inserted id
			$sellerID = $this->DB->insert_id();
			
			if($sellerID):
			
				//initialize mail class
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				
				
								
				//get Super User Email to send data about new user
				$this->DB->where('send_email', '1'); 
				$this->DB->where('state', '1');
				$this->DB->where('role', '1'); 
				$this->DB->limit(1);
				
				//get from table
				$result = $this->DB->get('idrive_users');
				$superuser = $result->row();	
				
				//send email to user notifying them on the account details			
				$this->email->from($superuser->email, $superuser->name);
				$this->email->to($data['seller_email']); 
				$this->email->bcc($superuser->email); 
				
				$this->email->subject('New Dealer Account Creation');
				$message = "<b>Dear ".$data['seller_name'].' , </b><br/>';
				$message .= '<p>We at Autodealer LTD are pleased to notify you that Your Dealer account has been automatically <br/>';
				$message .= 'created for you. You can use the credentials below to login and manage your posts. <br/></p>';
				$message .= '<p>Username : <b>'.$data['seller_email'].'</b> <br/>';
				$message .= 'Password : <b>'.$data['seller_password'].'</b><br/><br/></p>';
				
				$message .= '<p>We Look foward to good business together.<br/>';
				$message .= '------------------<br/>Regards, <br/>';
				$message .= $superuser->name.' <br/></p>';
				//$message .= $superuser->phone.' <br/>';
				
				$this->email->message($message);	
				
				$this->email->send();
				
				return $sellerID;
				
			else:
			
				return false;
			
			endif;
			
			
			 
		
	}
	
}