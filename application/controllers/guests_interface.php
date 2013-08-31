<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Guests_interface extends MY_Controller{
	
	var $offset = 0;
	
	function __construct(){

		parent::__construct();
	}
	
	public function index(){
		
		$this->load->view("index");
	}
	public function camp(){
		
		$this->session->unset_userdata('order_data');
		$this->load->view("camp");
	}
}