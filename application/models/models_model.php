<?php
//no direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//users model
class Models_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	//get database all models
	function getModels($id=NULL){
		
		//instantiate db function
		$db = $this->db;
		
		//write query to get the user's details
		if(is_null($id)):
		
			//$where = " ";
			
		else:
			
			$db->where('`idrive_models`.`id`', $id);
			
		endif;
		
		$db->select('`idrive_models`.`id`,model_name,manufacturer_name,`idrive_models`.`state`');
		$db->from('`idrive_models`');
		$db->join('`idrive_manufactures`', 'idrive_manufactures.id = idrive_models.manufacturer');
		
		$result = $db->get();

		/*$sql = "SELECT * FROM `idrive_models` ".$where;
		$result = $db->query($sql);*/
		
		$data = $result->result();
		
		//print_r($data);

		return $data;
		
		
	}//end login
	
	
		//get database all models
	function save(){
		
		//instantiate db function
		$db = $this->db;
		
		$data= $this->input->post();
		
		$manData = array('model_name' => $data['model'],'manufacturer' => $data['manufacturer'],'state' => $data['state']);
		
		if(empty($data['id']) ||$data['id'] ==""):
		
			$inserted = $db->insert("`idrive_models`",$manData);
			
			if($inserted):
			
				return true;
			else:
				return false;
			endif;
			
		else:
			$this->db->where('id', $data['id']);
			$updeted = $this->db->update("`idrive_models`",$manData);
			
			if($updeted):
			
				return true;
			else:
				return false;
			endif;
			
		endif; 
		
	}
	
}