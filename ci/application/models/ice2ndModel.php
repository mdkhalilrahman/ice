<?php 
class ice2ndModel extends CI_Model{

	//ice2nd batch model part
	public function ice2ndInsert($data){
		return $this->db->insert('ice2nd', $data);
	}

	public function ice2ndFetch(){
		return $this->db->get('ice2nd');
	}

	public function ice2ndEditFetch($id){
		$q = $this->db->select()
					  ->from('ice2nd')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice2ndUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice2nd',$arr);
	}

	public function ice2ndDelete($id){
		return $this->db->delete('ice2nd',['id'=>$id]);
	}



}