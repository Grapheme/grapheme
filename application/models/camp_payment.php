<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Camp_payment extends MY_Model{

	protected $table = "camp_payment";
	protected $primary_key = "id";
	protected $fields = array("*");
	
	function __construct(){
		
		parent::__construct();
	}
}