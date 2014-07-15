<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//users model
class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	//get database users dsetails
	function login(){
		
		//instantiate db function
		$db = $this->db;
		
		//get posted data
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		//write query to get the user's details
		$sql = "SELECT * FROM `idrive_users` RIGHT JOIN `idrive_roles` ON `idrive_users`.`role` = `idrive_roles`.`id`"; 
		$sql .= "WHERE `username` LIKE ? AND `password` LIKE ? AND state = ? ";

		$result = $db->query($sql, array($username, $password,1));
		
		//check if any data exists
		if ($result->num_rows > 0):
		
			//kill session data first
			//$this->session->sess_destroy();
		
			$user = $result->row();
			//print_r($user);
			
			//update db with login 
			$updateSql = "UPDATE `idrive_users` SET `last_visit_date` =  NOW(), `is_loggedin` = 1  WHERE `id` LIKE '".$user->id."'";

			$db->query($updateSql);
			
			$userData = array(
			 		   'userid'  => $user->id,
					   'name'  => $user->name,
					   'email'     => $user->email,
					   'role'     => $user->role_name
				   );
			 
			//set session data
			$this->session->set_userdata($userData);
			
			//free the db
			//$db->free_result();
			
			return true;
		else:
			
			//kill all existing session data
			$this->session->session_destroy();
			
			return false;
			 
		endif;
		
		
	}//end login
	
	//get all cars
	public function getUsers($manID = 0){
		
		if($manID):
			$this->DB->where("idrive_users.id",$manID);
		endif;
		
		//build the query
		$this->DB->select('`idrive_users`.*,idrive_roles.role_name,idrive_counties.county_name');
		$this->DB->from('`idrive_users`');
		$this->DB->join('idrive_roles', 'idrive_roles.id = idrive_users.role_id','left');
		$this->DB->join('idrive_counties', 'idrive_counties.id = idrive_users.county_id','left');
		$this->DB->order_by("`idrive_users`.id",'DESC');
		$result = $this->DB->get();
		
		$items = $result->result();
			
	return $items;
	}
	
}