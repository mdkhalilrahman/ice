<?php
class teachermodel extends CI_Model{

	//teacher model part
	public function teacherInsert($data){
		return $this->db->insert('teacher', $data);
	}

	public function teacherfetch(){
		return $this->db->get('teacher');
	}

	public function teachereditfatch($id){
		$q = $this->db->select()
					  ->from('teacher')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function teacherupdate($id,$arr){
		return $this->db->where('id',$id)
						->update('teacher',$arr);
	}

	public function teacherdalete($id){
		return $this->db->delete('teacher',['id'=>$id]);
	}
}