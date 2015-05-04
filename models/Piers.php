<?php
class Piers extends BaseModel  {
	
	protected $table = 'piers';
	protected $primaryKey = 'ID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT piers.* FROM piers  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE piers.ID IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
