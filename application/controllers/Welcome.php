<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Event_Model','obj');
		$event =$this->obj->Get_All_Event(); 
			$this->load->view('index',compact('event')); 
		
	}

	public function Edit_Event()
	{
		$config = [

			'upload_path'=>'./upload_image',
			'allowed_types'=>'gif|jpg|png|jpeg',
		];

		$this->load->library('upload',$config);
		if($this->upload->do_upload('event_image'))
		{	
			$event_id = $this->input->post('event_id');
		
			$data = $this->upload->data();
			$data['filename'] = $data['file_name']; // new
			$image_path =  base_url("upload_image/".$data['raw_name'].$data['file_ext']);
			//$post_data['event_image']=$image_path;
			$post_data = [
				'event_title'=>$this->input->post('event_title'),
				'event_description'=>$this->input->post('event_description'),
				'event_location'=>$this->input->post('event_location'),
				'event_date'=>$this->input->post('event_date'),
				'event_time'=>$this->input->post('event_time'),
				'event_image'=>$image_path,
				'event_type'=>$this->input->post('event_type'),
				'timestamp'=>$this->input->post('timestamp')
			];
			
			
			$this->load->model('Event_Model');
			$Articles = $this->Event_Model->Update_Event($event_id,$post_data);
			if($Articles)
			{
				$this->session->set_flashdata('sms',' Event Edit  Successfully');
				$this->session->set_flashdata('class','alert-success');
					return redirect('Welcome/Admin_Page');
			}else 
			{
				return redirect('Welcoe/Admin_Page');
			}
		}else
		{


		$event_id = $this->input->post('id');
		$this->load->model('Event_Model','obj');
		$event=$this->obj->Edit_Event($event_id);
		$this->load->view('Edit_Events',['events'=>$event]);
		}
	}


	public function Delete_Event()
	{
		$event_id = $this->input->post('id');
		$this->load->model('Event_Model','obj');
		$Delete=$this->obj->Delete_Event($event_id);
		if($Delete)
		{
			return redirect('Welcome/Admin_Page');
		}
		
	}

	public function event_detail($event_id)
	{
		
		/*$this->load->helper('url'); 
		$event_id = $this->uri->segment($event_id);*/
		$this->load->model('Event_Model','obj');
		$events =$this->obj->Edit_Event($event_id); 
		
		$this->load->view('Event-detail',compact('events')); //

	}	

	public function About()
	{
		$this->load->view('about');
	}	
	public function Contact()
	{
		$this->load->view('contact');
	}
	
	public function Galllery()
	{
		$this->load->model('Event_Model','obj');
		$images =$this->obj->Get_All_images(); 
			$this->load->view('gallery',compact('images'));

		//$this->load->view('gallery');
	}
	
	public function Event()
	{
		// code for error log ============/

		log_message('error','error in this line');
		log_message('debug','debug message in this line');
		log_message('info','index method called');

		// end code for error log =========

		$this->load->model('Event_Model','obj');
		$event =$this->obj->Get_All_Event(); 
			$this->load->view('event',compact('event')); // compat variale ko array bna deta h

		//================ end code ============

	}

	public function vision()
	{
		$this->load->view('vision');
	}
	

	public function Admin()
	{
		$this->load->view('admin-page');
	}
	

	public function rule()
	{
		$this->load->view('rule');
	}
	
	public function Login()
	{
		if($this->form_validation->run('login_gmail')) // validation for form / config k ander form_validation m h
		{
		    // print_r($this->input->post());
			 $username = $this->input->post('name');
		      $password = $this->input->post('password');
		      $this->load->model("Event_Model");
		      $user_id = $this->Event_Model->Get_user($username,$password);
		      if($user_id)
		      {
		        $this->load->library('session'); // start session
		        $this->session->set_userdata('user_id',$user_id); //  set value in session
		        $this->session->set_userdata('username',$username);
		                return redirect('Welcome/Admin_Page');
		      }else
		      {
		        $this->session->set_flashdata('failed_login','invalid username/password');
		        return redirect('Welcome/Login');

		      }
	  }else
	    {

	     $this->load->view('login');//  bydefault v ye hi call hoga  mtlb login form khulega
	    
	    }
				
	}
	
	public function Image_Upload()
	{
			

			$config = [

				'upload_path'=>'./upload_image',
				'allowed_types'=>'gif|jpg|png',
			];

		$this->load->library('upload',$config);
			if($this->upload->do_upload('image_one'))
			{	
				$timestamp = $this->input->post('timestamp');
				$data = $this->upload->data();
		  	$data['filename'] = $data['file_name']; // new
		  	$image_path_one =  base_url("upload_image/".$data['raw_name'].$data['file_ext']);
			

				$this->upload->do_upload('image_two');
				$data = $this->upload->data();
				$data['filename'] = $data['file_name']; // new
		  	$image_path_two =  base_url("upload_image/".$data['raw_name'].$data['file_ext']);
				

				$this->upload->do_upload('image_three');
				$data = $this->upload->data();
				$data['filename'] = $data['file_name']; // new
		  	$image_path_three =  base_url("upload_image/".$data['raw_name'].$data['file_ext']);
			$gallery = 
				[
					'image_one'=>$image_path_one,
					'image_two'=>$image_path_two,
					'image_three'=>$image_path_three,
					'timestamp'=>$timestamp,

				];

				/*echo "<pre>"; print_r($gallery);
				exit();*/
				$this->load->model('Event_Model');
				$Gallery = $this->Event_Model->Create_Gallery($gallery);
				if($Gallery)
				{
					return redirect('Welcome/Admin_Page');
				}else 
				{
					$this->session->set_flashdata('sms','Gallery can not added');
					$this->session->set_flashdata('class','alert-danger');
					return redirect('Welcoe/Admin_Page');
				}


			}else
			{
				$this->load->view('admin-page');

			}
		
	}

	public function Admin_Page()
	{
		//print_r($this->input->post());
		$config = [

				'upload_path'=>'./upload_image',
				'allowed_types'=>'gif|jpg|png|jpeg',
			];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('event_image'))
			{	
				$post_data = $this->input->post();
				$data = $this->upload->data();
				$data['filename'] = $data['file_name']; // new
				$image_path =  base_url("upload_image/".$data['raw_name'].$data['file_ext']);
			  $post_data['event_image']=$image_path;
			 
				$this->load->model('Event_Model');
				$Articles = $this->Event_Model->Create_Event($post_data);
				if($Articles)
				{
					$this->session->set_flashdata('sms',' Event Added  Successfully');
					$this->session->set_flashdata('class','alert-success');
					  return redirect('Welcome/Admin_Page');
				}else 
				{
					$this->session->set_flashdata('sms','Event can not added');
					$this->session->set_flashdata('class','alert-danger');
					return redirect('Welcoe/Admin_Page');
				}
			}else
			{
				$this->load->model('Event_Model','obje');
				$events =$this->obje->Get_Events();
				$upload_error=$this->upload->display_errors();
				//$data['upload_error']=compact('upload_error');
				$data['evets']=$events;

				$this->load->view('admin-page',$data);
			}			// validation for form / config k ander form_validation m h
	}


	public function test()
	{
		$this->load->model('Authenicate','object');
		$data = $this->object->get_data();
		print_r($data);
	}
}
