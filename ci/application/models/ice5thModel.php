<?php 
class ice5thModel extends CI_Model{

	//ice5th batch model part
	public function ice5thInsert($data){
		return $this->db->insert('ice5th', $data);
	}

	public function ice5thFetch(){
		return $this->db->get('ice5th');
	}

	public function ice5thEditFetch($id){
		$q = $this->db->select()
					  ->from('ice5th')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice5thUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice5th',$arr);
	}

	public function ice5thDelete($id){
		return $this->db->delete('ice5th',['id'=>$id]);
	}

	
}