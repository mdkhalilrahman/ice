<?php 
class ice3rdModel extends CI_Model{

	//ice3rd batch model part
	public function ice3rdInsert($data){
		return $this->db->insert('ice3rd', $data);
	}

	public function ice3rdFetch(){
		return $this->db->get('ice3rd');
	}

	public function ice3rdEditFetch($id){
		$q = $this->db->select()
					  ->from('ice3rd')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice3rdUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice3rd',$arr);
	}

	public function ice3rdDelete($id){
		return $this->db->delete('ice3rd',['id'=>$id]);
	}
	
}