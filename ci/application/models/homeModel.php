<?php
class homeModel extends CI_Model{

	//teacher model part
	public function homeINsert($data){
		return $this->db->insert('home', $data);
	}

	public function homeFatch(){
		return $this->db->get('home');
	}

	public function homeEditFatch($id){
		$q = $this->db->select()
					  ->from('home')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function homeUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('home',$arr);
	}

	public function homeDelete($id){
		return $this->db->delete('home',['id'=>$id]);
	}
}