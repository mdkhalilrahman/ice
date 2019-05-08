<?php 
class ice4thModel extends CI_Model{

	//ice4th batch model part
	public function ice4thInsert($data){
		return $this->db->insert('ice4th', $data);
	}

	public function ice4thFetch(){
		return $this->db->get('ice4th');
	}

	public function ice4thEditFetch($id){
		$q = $this->db->select()
					  ->from('ice4th')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice4thUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice4th',$arr);
	}

	public function ice4thDelete($id){
		return $this->db->delete('ice4th',['id'=>$id]);
	}

	
}