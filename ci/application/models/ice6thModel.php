<?php 
class ice6thModel extends CI_Model{

	//ice6th batch model part
	public function ice6thInsert($data){
		return $this->db->insert('ice6th', $data);
	}

	public function ice6thFetch(){
		return $this->db->get('ice6th');
	}

	public function ice6theditFetch($id){
		$q = $this->db->select()
					  ->from('ice6th')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice6thUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice6th',$arr);
	}

	public function ice6thDelete($id){
		return $this->db->delete('ice6th',['id'=>$id]);
	}
	
}