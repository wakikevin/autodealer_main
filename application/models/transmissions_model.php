<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//users model
class Transmissions_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	//get database all transmissions
	function getTransmissions($id=NULL){
		
		//instantiate db function
		$db = $this->db;
		
		//write query to get the user's details
		if(is_null($id)):
		
			//$where = " ";
			
		else:
			
			$db->where('`id`', $id);
			
		endif;
		
		$result = $db->get('`idrive_transmission`');
		/*$sql = "SELECT * FROM `idrive_transmission` ".$where;
		$result = $db->query($sql);*/
		
		$data = $result->result();
		
		//print_r($data);

		return $data;
		
		
	}//end login
	
	
		//get database all transmissions
	function save(){
		
		//instantiate db function
		$db = $this->db;
		
		$data= $this->input->post();
		
		$manData = array('transmission_name' => $data['transmission'],'state' => $data['state']);
		
		if(empty($data['id']) ||$data['id'] ==""):
		
			$inserted = $db->insert("`idrive_transmission`",$manData);
			
			if($inserted):
			
				return true;
			else:
				return false;
			endif;
			
		else:
			$this->db->where('id', $data['id']);
			$updeted = $this->db->update("`idrive_transmission`",$manData);
			
			if($updeted):
			
				return true;
			else:
				return false;
			endif;
			
		endif; 
		
	}
	
}