<?php 

//prevent direct access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	public $DB;
	
	function __construct()
    {
        parent::__construct();
		
		//instantiate db function
		$this->DB = $this->db;
    }
	
	
	//this class helps us to get the dropdowns that exist
	
	//years
	public function getYears($id= NULL){
		
		//query to get the list of active years
		$this->DB->where('`idrive_years`.`state` = 1');
		$result = $this->DB->get('`idrive_years`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="yom" required>
						<option value="" >Select Year</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			
			else:
				$selected = ' ';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->year. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//colors
	public function getColors($id= NULL){
		
		//query to get the list of active years
		$this->DB->where('`idrive_colors`.`state` = 1');
		$result = $this->DB->get('`idrive_colors`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="color" required>
						<option value="" >Select Colour</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->color_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//manufacturers
	public function getManufacturers($id= NULL){
		
		//query to get the list of active years
		$this->DB->where('`idrive_manufactures`.`state` = 1');
		$result = $this->DB->get('`idrive_manufactures`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="manufacturers" onChange="return getModels(this.value);" required>
						<option value="" >Select Manufacturer</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->manufacturer_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Models
	public function getModels($manID = NULL ,$id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_models`.`state` = 1');
		$this->DB->where('`idrive_models`.`manufacturer` = '.$manID);
		$result = $this->DB->get('`idrive_models`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->model_name. '</option>';
			
		endforeach;
		
		//$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//transmission types
	public function getTransmission($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_transmission`.`state` = 1');
		$result = $this->DB->get('`idrive_transmission`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="transmission" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->transmission_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//countries
	public function getCountries($id= NULL){
		
		//query to get the list of active 
		//$this->DB->where('`idrive_countries`.`state` = 1');
		$result = $this->DB->get('`idrive_countries`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="country" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			elseif ($item->id == '117' ):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->country_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//counties
	public function getCounties($id= NULL){
		
		//query to get the list of active 
		//$this->DB->where('`idrive_countries`.`state` = 1');
		$result = $this->DB->get('`idrive_counties`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="county" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->county_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	
	
	//conditions
	public function getConditions($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_conditions`.`state` = 1');
		$result = $this->DB->get('`idrive_conditions`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="condition" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->condition_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//locations
	public function getLocations($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_locations`.`state` = 1');
		$result = $this->DB->get('`idrive_locations`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="location" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->location_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Fueltype
	public function getFuelTypes($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_fueltypes`.`state` = 1');
		$result = $this->DB->get('`idrive_fueltypes`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="fuel_type" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->fueltype_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Drivetype
	public function getDriveTypes($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_drivetype`.`state` = 1');
		$result = $this->DB->get('`idrive_drivetype`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="drive_type" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->drivetype_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Drivesetup
	public function getDriveSetup($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_setup`.`state` = 1');
		$result = $this->DB->get('`idrive_setup`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="drive_setup" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->setup_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//CC
	public function getCC($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_cc`.`state` = 1');
		$result = $this->DB->get('`idrive_cc`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="cc" required>
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->cc_value. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Body Types
	public function getBodyType($id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_bodytypes`.`state` = 1');
		$result = $this->DB->get('`idrive_bodytypes`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '<select class="select_5" name="body_type" >
						<option value="" >Select</option>';
						
		foreach($items as $item):
			
			//check if it is the selected year for editing purposes
			if($item->id == $id):
				$selected = ' selected = "selected" ';
			else:
				$selected = '';
			endif;
			
			$dropdown.= '<option value="'.$item->id.'" '.$selected.'>'.$item->bodytype_name. '</option>';
			
		endforeach;
		
		$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	//Accessories
	public function getEquipment($manID = NULL ,$id= NULL){
		
		//query to get the list of active 
		$this->DB->where('`idrive_equipment`.`state` = 1');
		
		$result = $this->DB->get('`idrive_equipment`');
		$items = $result->result();
		
		//loop to feed dropdown
		$dropdown = '';
		
		$itemChunks = array_chunk($items,6);
		
		
		$i =1;	
		$dropdown = '';		
		foreach($itemChunks as $items):
		//print_r($items);
		
			//$dropdown .= '<div class="chb_group">';
			
			if($i == 6 ):
				$dropdown .= '<div class="chb_group last">';
			else:
				$dropdown .= '<div class="chb_group">';
			endif;
				
			
			foreach($items as $item):
			
				//check if it is the selected year for editing purposes
				if($item->id == $id):
					$selected = ' checked = "checked" ';
				else:
					$selected = '';
				endif;
				
				$dropdown.= '<span class="custom_chb_wrapper">
									<span class="custom_chb">
										<input type="checkbox" name="equipment[]" value="'.$item->id.'" '.$selected.' />
									</span>
									<label>'.$item->equipment_name.'</label>
								</span>';
			endforeach;
			if($i == 5 ):
				$dropdown .= '</div> <div class="chb_devider"></div>';
			else:
				$dropdown .= '</div>';
			endif;
			
			$i++;
			
		endforeach;
		
		//$dropdown.='</select>';
		
		
		//print_r($dropdown);

		return $dropdown;
		
	}
	
	
	///get the manufacturers and number of vehicles
	public function getTotals(){
		
		//build the query
		$this->DB->select('count(`idrive_cars`.id) AS total,manufacturer_name,manufacturer_id');
		$this->DB->from('`idrive_cars`');
		$this->DB->join('idrive_manufactures', 'idrive_manufactures.id = idrive_cars.manufacturer_id','left');
		$this->DB->group_by("idrive_manufactures.manufacturer_name");
		$result = $this->DB->get();
		
		$items = $result->result();
			
	return $items;
	} 
	
	//get recent cars
	public function getRecent($num = 0){
		
		
		
		//build the query
		$this->DB->select('MAX(idrive_images.id),`idrive_cars`.id,image_name,bodytype_name,cc_value,year,vehicle_price,currency,manufacturer_name,model_name,doors');
		$this->DB->from('`idrive_cars`');
		$this->DB->join('idrive_manufactures', 'idrive_manufactures.id = idrive_cars.manufacturer_id','left');
		$this->DB->join('idrive_models', 'idrive_models.id = idrive_cars.model_id','left');
		$this->DB->join('idrive_bodytypes', 'idrive_bodytypes.id = idrive_cars.bodytype_id','left');
		$this->DB->join('idrive_cc', 'idrive_cc.id = idrive_cars.cc_id','left');
		$this->DB->join('idrive_years', 'idrive_years.id = idrive_cars.year_id','left');
		$this->DB->join('idrive_images', 'idrive_images.vehicle_id = idrive_cars.id','left');
		$this->DB->group_by("idrive_cars.id");
		$this->DB->order_by("`idrive_cars`.id",'DESC');
		if($num):
			$this->DB->limit($num);
		endif;
		$result = $this->DB->get();
		
		$items = $result->result();
			
	return $items;
	}
}