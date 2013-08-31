<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	function campRegister(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'responseText'=>'','numberOrder'=>0);
		if($this->postDataValidation('camp_register') === TRUE):
			if($orderID = $this->insertItem(array('insert'=>$this->input->post(),'model'=>'camp_register'))):
				$mailData['order'] = $post = $this->input->post();
				$mailData['order']['order_id'] = $post['order_id'] = $orderID;
				$this->session->set_userdata('order_data',json_encode($post));
				
				$mailData['order']['summa'] = 2000; $mailData['order']['summa_word'] = 'две тясычи';
				$now = time();
				if($now >= strtotime('02.09.2013') && $now < strtotime('18.09.2013')):
					$mailData['order']['summa'] = 3500; $mailData['order']['summa_word'] = 'три тясычи пятсот';
				elseif($now >= strtotime('18.09.2013')):
					$mailData['order']['summa'] = 4500; $mailData['order']['summa_word'] = 'четыре тясычи пятсот';
				endif;
				$mailtext = $this->load->view('mails/camp-order',$mailData,TRUE);
				$this->sendMail($mailData['order']['email'],'be.digital@grapheme.ru','Графема','Мастер-класс Максима Костенко',$mailtext);
				$mailtext = $this->load->view('mails/camp-order-admin',$mailData,TRUE);
				$this->sendMail('be.digital@grapheme.ru','info@grapheme.ru','Графема','Мастер-класс Максима Костенко',$mailtext);
				
				$json_request['numberOrder'] = str_pad($orderID,3,'0',STR_PAD_LEFT).'/CAMP_1';
				$json_request['status'] = TRUE;
			endif;
		else:
			$json_request['responseText'] = $this->load->view('html/validation-errors',array('alert_header'=>FALSE),TRUE);
		endif;
		echo json_encode($json_request);
	}
	
	function campPayment(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'responseText'=>'');
		if($this->postDataValidation('camp_payment') === TRUE):
			if($paymentID = $this->insertItem(array('insert'=>$this->input->post(),'model'=>'camp_payment'))):
				$mailData['order'] = json_decode($this->session->userdata('order_data'),TRUE);
				$mailData['payment'] = $this->input->post();
				$mailData['payment']['id'] = $paymentID;
				$mailData['order']['summa'] = 2000; $mailData['order']['summa_word'] = 'две тясычи';
				$now = time();
				if($now >= strtotime('02.09.2013') && $now < strtotime('18.09.2013')):
					$mailData['order']['summa'] = 3500; $mailData['order']['summa_word'] = 'три тясычи пятсот';
				elseif($now >= strtotime('18.09.2013')):
					$mailData['order']['summa'] = 4500; $mailData['order']['summa_word'] = 'четыре тясычи пятсот';
				endif;
				$mailtext = $this->load->view('mails/camp-payment-admin',$mailData,TRUE);
				$this->sendMail('be.digital@grapheme.ru','info@grapheme.ru','Графема','Мастер-класс Максима Костенко',$mailtext);
				$this->session->unset_userdata('order_data');
				$json_request['status'] = TRUE;
			endif;
		else:
			$json_request['responseText'] = $this->load->view('html/validation-errors',array('alert_header'=>FALSE),TRUE);
		endif;
		echo json_encode($json_request);
	}
	
}