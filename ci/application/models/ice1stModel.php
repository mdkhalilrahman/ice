<?php 
class ice1stModel extends CI_Model{


	//ice1st batch model part
	public function ice1stInsert($data){
		return $this->db->insert('ice1st', $data);
	}

	public function ice1stFetch(){
		return $this->db->get('ice1st');
	}

	public function ice1stEditFetch($id){
		$q = $this->db->select()
					  ->from('ice1st')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice1stUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice1st',$arr);
	}

	public function ice1stDelete($id){
		return $this->db->delete('ice1st',['id'=>$id]);
	}


}