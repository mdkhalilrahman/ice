<?php 
class ice7thModel extends CI_Model{

	//ice7th batch model part
	public function ice7thInsert($data){
		return $this->db->insert('ice7th', $data);
	}

	public function ice7thFatch(){
		return $this->db->get('ice7th');
	}

	public function ice7theditfatch($id){
		$q = $this->db->select()
					  ->from('ice7th')
					  ->where(['id'=>$id])
					  ->get();		
					  return $q->row();
	}

	public function ice7thUpdate($id,$arr){
		return $this->db->where('id',$id)
						->update('ice7th',$arr);
	}

	public function ice7thdalete($id){
		return $this->db->delete('ice7th',['id'=>$id]);
	}

}