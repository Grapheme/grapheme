<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	$config = array(
		'camp_register' =>array(
			array('field'=>'email','label'=>'email','rules'=>'required|trim|valid_email'),
			array('field'=>'lname','label'=>'lname','rules'=>'required|trim|xss_clean'),
			array('field'=>'fname','label'=>'fname','rules'=>'required|trim|xss_clean'),
			array('field'=>'company','label'=>'company','rules'=>'required|trim|xss_clean'),
			array('field'=>'position','label'=>'position','rules'=>'required|trim|xss_clean'),
			array('field'=>'subscribe','label'=>'subscribe','rules'=>'trim|numeric')
		),
		'camp_payment' =>array(
			array('field'=>'ccompany','label'=>'ccompany','rules'=>'required|trim|xss_clean'),
			array('field'=>'caddress1','label'=>'caddress1','rules'=>'trim|xss_clean'),
			array('field'=>'caddress2','label'=>'caddress2','rules'=>'required|trim|xss_clean'),
			array('field'=>'cinn','label'=>'cinn','rules'=>'required|trim|xss_clean'),
			array('field'=>'ckpp','label'=>'ckpp','rules'=>'trim|xss_clean'),
			array('field'=>'cphone','label'=>'cphone','rules'=>'required|trim|xss_clean'),
		),
	);
?>