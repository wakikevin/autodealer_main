<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//users model
class Conditions_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	//get database all conditions
	function getConditions($id=NULL){
		
		//instantiate db function
		$db = $this->db;
		
		//write query to get the user's details
		if(is_null($id)):
		
			//$where = " ";
			
		else:
			
			$db->where('`id`', $id);
			
		endif;
		
		$result = $db->get('`idrive_conditions`');
		/*$sql = "SELECT * FROM `idrive_conditions` ".$where;
		$result = $db->query($sql);*/
		
		$data = $result->result();
		
		//print_r($data);

		return $data;
		
		
	}//end login
	
	
		//get database all conditions
	function save(){
		
		//instantiate db function
		$db = $this->db;
		
		$data= $this->input->post();
		
		$manData = array('condition_name' => $data['condition'],'state' => $data['state']);
		
		if(empty($data['id']) ||$data['id'] ==""):
		
			$inserted = $db->insert("`idrive_conditions`",$manData);
			
			if($inserted):
			
				return true;
			else:
				return false;
			endif;
			
		else:
			$this->db->where('id', $data['id']);
			$updeted = $this->db->update("`idrive_conditions`",$manData);
			
			if($updeted):
			
				return true;
			else:
				return false;
			endif;
			
		endif; 
		
	}
	
}