<?php 

//prevent direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cars_model extends CI_Model {
	
	public $DB;
	
	function __construct()
    {
        parent::__construct();
		
		//instantiate db function
		$this->DB = $this->db;
    }
	
	//save car details
	public function save($data,$sellerID){
		
			//process accessory ids
			$equipment = implode(',',$data['equipment']);
			if(!$data['negotiable'] || $data['negotiable'] == '' ):
			
				$negotiable = 0;
			else:
			
				$negotiable = 1;
			endif;
		
			//get posted data
			$carData = array('user_id'=>$sellerID,
								'manufacturer_id'=>$data['manufacturers'],
								'model_id'=>$data['model'],
								'year_id'=>$data['yom'],
								'bodytype_id'=>$data['body_type'],
								'fueltype_id'=>$data['fuel_type'],
								'transmission_id'=>$data['transmission'],
								'doors'=>$data['doors'],
								'cc_id'=>$data['cc'],
								'hp_kw'=>$data['hp'],
								'chassis_no'=>$data['chassis'],
								'color_id'=>$data['color'],
								'accessory_ids'=>$equipment,
								'vehicle_price'=>$data['price'],
								'negotiable'=>$negotiable,
								'currency'=>$data['currency']);
								
			//print_r($carData);
								
			//make actual insert
			$this->DB->insert('idrive_cars', $carData); 
			
			//get the inserted id
			$carID = $this->DB->insert_id();
			
			if($carID):
			
				return $carID;
				
			else:
			
				return false;
			
			endif; 
		
	}
	
	//save car images
	public function saveImage($filename,$carID){
		
		
			//get posted data
			$carData = array('vehicle_id'=>$carID,
								'image_name'=>$filename);
								
			//print_r($carData);
								
			//make actual insert
			$this->DB->insert('idrive_images', $carData); 
			
		return true;
	}
	
	//get Car owner
	public function getOwner($carID){
		
		
				$this->DB->where('id', $carID); 
				$this->DB->limit(1);
				
				//get from table
				$result = $this->DB->get('idrive_cars');
				$car = $result->row();	
				
				$this->DB->where('id', $car->user_id); 
				$this->DB->limit(1);
				$result2 = $this->DB->get('idrive_users');
				$user = $result2->row();
				
				
				//get user
			
		return $user;
	}
	
	//save car images
	public function createInvoice($userid,$carID){
		
			//generate unique
			$ordernum = strtoupper(substr(MD5(date("F j, Y, g:i a")),0,6).'-'.$userid.'-'.$carID);
		
			//get posted data
			$carData = array('vehicle_id'=>$carID,
								'user_id'=>$userid,
								'order_number'=>$ordernum,
								'amount'=>1000);
								
								
			//make actual insert
			$this->DB->insert('idrive_invoices', $carData); 
			
		return $ordernum;
	}
	
	//save car images
	public function updateInvoice($order,$tracking){

		
			//get posted data
			$carData = array('order_number'=>$order,
								'pesapal_tracking_id'=>$tracking);
								
								
			//make actual insert
			$this->db->where('order_number', $order);
			$this->DB->update('idrive_invoices', $carData); 
			
		return $ordernum;
	}
	
	
	//get all cars
	public function getCars($manID = 0){
		
		if($manID):
			$this->DB->where("idrive_manufactures.id",$manID);
		endif;
		
		//build the query
		$this->DB->select('MAX(idrive_images.id),`idrive_cars`.id,image_name,manufacturer_id,bodytype_name,cc_value,year,vehicle_price,currency,manufacturer_name,model_name,doors');
		$this->DB->from('`idrive_cars`');
		$this->DB->join('idrive_manufactures', 'idrive_manufactures.id = idrive_cars.manufacturer_id','left');
		$this->DB->join('idrive_models', 'idrive_models.id = idrive_cars.model_id','left');
		$this->DB->join('idrive_bodytypes', 'idrive_bodytypes.id = idrive_cars.bodytype_id','left');
		$this->DB->join('idrive_cc', 'idrive_cc.id = idrive_cars.cc_id','left');
		$this->DB->join('idrive_years', 'idrive_years.id = idrive_cars.year_id','left');
		$this->DB->join('idrive_images', 'idrive_images.vehicle_id = idrive_cars.id','left');
		$this->DB->group_by("idrive_cars.id");
		$this->DB->order_by("`idrive_cars`.id",'DESC');
		$result = $this->DB->get();
		
		$items = $result->result();
			
	return $items;
	}
	
	//get total cars
	public function totalCars($manID = 0){
		
		
		$cars = count($this->getCars($manID));
		
		return $cars;
	}
	
	//get all selected car
	public function getCar($carID = 0){
		
		if($carID):
			$this->DB->where("idrive_cars.id",$carID);
		endif;
		
		//build the query
		$this->DB->select('MAX(idrive_images.id),`idrive_cars`.id,image_name,manufacturer_id,bodytype_name,cc_value,year,vehicle_price,currency,manufacturer_name,model_name,doors,fueltype_name,transmission_name,color_name');
		$this->DB->from('`idrive_cars`');
		$this->DB->join('idrive_manufactures', 'idrive_manufactures.id = idrive_cars.manufacturer_id','left');
		$this->DB->join('idrive_models', 'idrive_models.id = idrive_cars.model_id','left');
		$this->DB->join('idrive_bodytypes', 'idrive_bodytypes.id = idrive_cars.bodytype_id','left');
		$this->DB->join('idrive_fueltypes', 'idrive_fueltypes.id = idrive_cars.fueltype_id','left');
		$this->DB->join('idrive_cc', 'idrive_cc.id = idrive_cars.cc_id','left');
		$this->DB->join('idrive_colors', 'idrive_colors.id = idrive_cars.color_id','left');
		$this->DB->join('idrive_transmission', 'idrive_transmission.id = idrive_cars.transmission_id','left');
		$this->DB->join('idrive_years', 'idrive_years.id = idrive_cars.year_id','left');
		$this->DB->join('idrive_images', 'idrive_images.vehicle_id = idrive_cars.id','left');
		$this->DB->group_by("idrive_cars.id");
		$this->DB->order_by("`idrive_cars`.id",'DESC');
		$result = $this->DB->get();
		
		$items = $result->row();
			
	return $items;
	}
	//get all selected car
	public function getDealer($carID = 0){
		
		if($carID):
			$this->DB->where("idrive_cars.id",$carID);
		endif;
		
		//build the query
		$this->DB->select('idrive_users.*,country_name');
		$this->DB->from('`idrive_cars`');
		$this->DB->join('idrive_users', 'idrive_users.id = idrive_cars.user_id','left');
		$this->DB->join('idrive_countries', 'idrive_countries.id = idrive_users.country_id','left');
		$result = $this->DB->get();
		
		$items = $result->row();
			
	return $items;
	}
	//get all featurs for particular car
	public function getCarFeatures ($carID = 0){
		
		if($carID):
			$this->DB->where("idrive_cars.id",$carID);
		endif;
		
		//build the query
		$this->DB->select('idrive_cars.accessory_ids');
		$this->DB->from('`idrive_cars`');
		$result = $this->DB->get();
		
		$items = $result->row();
		//$ids = $items->accessory_ids;
		
		if(count($items) > 0) :
			//build the query
			$ids = explode(',',$items->accessory_ids);
			$this->db->where_in('id', $ids);
			$this->DB->select('idrive_equipment.equipment_name');
			$this->DB->from('`idrive_equipment`');
			$result2 = $this->DB->get();
		
			$data = $result2->result();
		else:
		
			$data = array();
		endif;
		
			
	return $data;
	}
	
	//get all images for particular car
	public function getCarImages($carID = 0){
		
		if($carID):
			$this->DB->where("idrive_images.vehicle_id",$carID);
		endif;
		
		//build the query
		$this->DB->select('idrive_images.*');
		$this->DB->from('`idrive_images`');
		$result = $this->DB->get();
		
		$items = $result->result();
			
	return $items;
	}
	
	
	
}