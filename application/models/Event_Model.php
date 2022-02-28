<?php 

class Event_Model extends CI_Model 
{
	public function Get_user($username,$password)
	{
		$get_user = $this->db->where(['user_name'=>$username,'password'=>$password])
				->get('user');
		// select * from users where username=$username and password=$password
		if($get_user->num_rows())
		{
			return $get_user->row()->user_id;
			//return $get_user->result();

		}else
		{
			return false;
		}
	}

	public function  Count_All_Event()
	{
		$Count = $this->db->select()//select*
				          ->from('event') // from articals
				          ->get(); 
					      return $Count->num_rows();
				          

	}
	public function Get_All_Event()
	{
		$query = $this->db->select()
				          ->from('event') 
				           //->limit($limit,$offset)
				          ->get(); 
				           //return $Articles->num_rows();
				         
				           return $query->result();
			          exit;

	}

	public function Get_All_images()
	{
		$image = $this->db->select()
						  ->from('gallery')
						  ->get();
						  return $image->result();
						  exit;
	}

	public function Get_Events()
	{
		$query = $this->db->select()
				          ->from('event') 
				           ->get(); 
				           //return $Articles->num_rows();
				         
				           return $query->result();
			          exit;

	}

	

	public function num_rows()
	{
		$user_id = $this->session->userdata('user_id');
		$rows = $this->db->select()//select*
				          ->from('articals') // from articals
				         // ->where(['user_id'=>$user_id]) // where user_id= $user_id	
				          ->get(); 
					      return $rows->num_rows();
				          exit;
	}



	public function  Get_article($limit,$offset)
	{
		$user_id = $this->session->userdata('user_id'); 
		$title = $this->db->select()//select*
				          ->from('articals') // from articals
				         ->where(['user_id'=>$user_id]) // where user_id= $user_id	
				          ->limit($limit,$offset)
				          ->get(); 
					      return $title->result(); //  multipal data aayega tb result lika
				          exit;
	}

	public function Create_Gallery($images)
	{
		return  $this->db->insert('gallery',$images);
	}

	public function Create_Event($array)
	{
		return  $this->db->insert('event',$array);
	}

	public function Create_User($array)
	{
		return  $this->db->insert('users',$array);
	}

	public function Update_Event($event_id, array $events)
	{
		
		return  $this->db->where('event_id',$event_id)	
							->update('event',$events);
	}

	public function Delete_Event($event_id)
	{
		return $this->db->delete('event',['event_id'=>$event_id]);
	}

	public function  Edit_Event($event_id) 
	{
		$data = $this->db->select()
					     ->where('event_id',$event_id)
				         ->get('event');
				         return $data->result_array();  //  kisi id ka 1 hi data aayga tb row lika
	}


	
}

?>