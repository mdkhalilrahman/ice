<?php 

class adminModel extends CI_Model{
	
	public function login($email,$pass){

			$data = array('email'=>$email,'username'=>$email,'pass'=>$pass);
		return $this->db->where($data)
					->from('admin');
	}

	
	

	

	

	



}