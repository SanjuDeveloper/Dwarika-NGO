<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 class users extends CI_controller
 {

 	public function user_detail()
 	{
 		//$this->load->model('Users_model','obj');  // model is  autload inside config/autoload.php
 		$this->load->library("email");
 		$this->email->show();
 		$data['users']= $this->Users_model->get_users();
 		
 		$this->load->view('user/user_detail',$data);
 	}
 }

?>