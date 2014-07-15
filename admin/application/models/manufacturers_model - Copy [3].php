<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//users model
class Manufacturers_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	//get database all manufacturers
	function getManufacturers($id=NULL){
		
		//instantiate db function
		$db = $this->db;
		
		//write query to get the user's details
		if(is_null($id)):
		
			//$where = " ";
			
		else:
			
			$db->where('`id`', $id);
			
		endif;
		
		$result = $db->get('`idrive_manufactures`');
		/*$sql = "SELECT * FROM `idrive_manufactures` ".$where;
		$result = $db->query($sql);*/
		
		$data = $result->result();
		
		//print_r($data);

		return $data;
		
		
	}//end login
	
	
		//get database all manufacturers
	function save(){
		
		//instantiate db function
		$db = $this->db;
		
		$data= $this->input->post();
		
		$manData = array('manufacturer_name' => $data['manufacturer'],'state' => $data['state']);
		
		if(empty($data['id']) ||$data['id'] ==""):
		
			$inserted = $db->insert("`idrive_manufactures`",$manData);
			
			if($inserted):
			
				return true;
			else:
				return false;
			endif;
			
		else:
			$this->db->where('id', $data['id']);
			$updeted = $this->db->update("`idrive_manufactures`",$manData);
			
			if($updeted):
			
				return true;
			else:
				return false;
			endif;
			
		endif; 
		
	}
	
}