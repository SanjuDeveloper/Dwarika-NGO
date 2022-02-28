<?php 

class Users_model extends CI_model
{

	public function get_users()
	{

		
		//$this->load->database();  //database is autoloaded

		//$this->db->select("firstname"); //only selcte the first name
		$this->db->where("user_id",2);
		$users = $this->db->get("users");

		//$users = $this->db->query(" select * from users");
		return $users->result_array();
		
	}
}


?>