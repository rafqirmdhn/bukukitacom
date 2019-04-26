<?php
	class Model_regis extends CI_Model{
		public function tambah($username, $password, $group){
			$data = array(
				'username' => $username,
				'password' => $password,
				'group' => $group,
				);
			$this->db->insert('users',$data);
		}
	} 
?>