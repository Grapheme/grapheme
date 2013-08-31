<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function pagination($url,$uri_segment,$total_rows,$per_page){
		
		$this->load->library('pagination');
		$config['base_url'] = site_url($url.'/offset/');
		$config['uri_segment'] = $uri_segment;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['num_links'] = 4;
		$config['first_link'] = 'В начало';
		$config['last_link'] = 'В конец';
		$config['next_link'] = 'Далее &raquo;';
		$config['prev_link'] = '&laquo; Назад';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function sendMail($to,$from_mail,$from_name,$subject,$text,$attach = NULL){
		
		$this->load->library('phpmailer');
		$mail = new PHPMailer();
		$mail->IsSendmail();
		$mail->SetFrom($from_mail,$from_name);
		$mail->AddReplyTo($from_mail,$from_name);
		$mail->AddAddress($to);
		$mail->Subject = $subject;
		$mail->MsgHTML($text);
		$mail->AltBody = strip_tags($text,'<p>,<br>');
		//$mail->AddAttachment('images/phpmailer-mini.gif');
		return $mail->Send();
		
		
		/*$this->load->library('email');
		$this->email->clear(TRUE);
		$config['smtp_host'] = 'localhost';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from($from_mail,$from_name);
		$this->email->bcc('');
		$this->email->subject($subject);
		for($i=0;$i<count($attach);$i++):
			$this->email->attach($attach[$i]['path']);
		endfor;
		$this->email->message($text);
		if($this->email->send()):
			return TRUE;
		else:
			show_error($this->email->print_debugger());
		endif;*/
	}
	
	public function postDataValidation($rules){
		
		$this->load->library('form_validation');
		return $this->form_validation->run($rules);
	}
	
	public function createDir($path){
		
		if(!file_exists($path) && !is_dir($path)):
			return mkdir($path,0766,TRUE);
		else:
			return TRUE;
		endif;
	}

	public function insertItem(){
		
		$arguments = &func_get_args();
		$insert = (isset($arguments[0]['insert']))?$arguments[0]['insert']:NULL;
		$model = (isset($arguments[0]['model']))?$arguments[0]['model']:NULL;
		$translit = (isset($arguments[0]['translit']))?$arguments[0]['translit']:NULL;
		unset($arguments);
		if(!is_null($insert) && is_array($insert)):
			if(!is_null($translit)):
				$insert['translit'] = $this->translite($translit);
			endif;
			if(!is_null($model)):
				$this->load->model($model);
				return $this->$model->insertRecord($insert);
			endif;
		endif;
		return FALSE;
	}
	
	public function updateItem(){
		
		$arguments = &func_get_args();
		$update = (isset($arguments[0]['update']))?$arguments[0]['update']:NULL;
		$model = (isset($arguments[0]['model']))?$arguments[0]['model']:NULL;
		$translit = (isset($arguments[0]['translit']))?$arguments[0]['translit']:NULL;
		unset($arguments);
		if(!is_null($update) && is_array($update)):
			if(!is_null($translit)):
				$update['translit'] = $this->translite($translit);
			endif;
			if(!is_null($model)):
				$this->load->model($model);
				return $this->$model->updateRecord($update);
			endif;
		endif;
		return FALSE;
	}
	
	public function getCurlLink($url){
		
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		curl_setopt($ch,CURLOPT_HEADER,0);
		$result = curl_exec($ch);
		curl_close($ch);
		if($result == FALSE):
			return file_get_contents($url);
		else:
			return $result;
		endif;
	}

	public function getValuesInArray($array,$value){
		
		$ids = array();
		for($i=0;$i<count($array);$i++):
			$ids[] = $array[$i][$value];
		endfor;
		return $ids;
	}
	
	public function getDBRecordsIDs($courses,$field = 'course'){
		
		$ids = array();
		for($i=0;$i<count($courses);$i++):
			$ids[] = $courses[$i][$field];
		endfor;
		return $ids;
	}
	
	public function reIndexArray($array){
		
		$newArray = array();
		foreach($array as $key => $value):
			$newArray[] = $value;
		endforeach;
		return $newArray;
	}

	public function getFileUploadErrorMessage($FileData){
		
		if(isset($FileData['name'])):
			$responseText = 'Файл: '.$FileData['name'].' не загружен. ';
			if($FileData['error'] == 1):
				$responseText .= "\nРазмер зашружаемого файла должен быть не более 2 Мб";
			elseif($FileData['error'] == 3):
				$responseText .= "\nЗагружаемый файл был получен только частично";
			elseif($FileData['error'] == 4):
				$responseText .= "\nОтсутствует файл для загрузки";
			endif;
			return $responseText;
		endif;
		return '';
	}
	
	/* -------------------------------------------------------------------------------------------- */
	
}
?>