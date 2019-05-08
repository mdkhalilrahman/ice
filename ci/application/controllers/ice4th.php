<?php 

class ice4th extends CI_Controller{


	//admin part

// admin view
	 public function ice4ths(){
 		$this->load->view('admin/ice4th');
 	}

 	public function ice4thview(){	
 		$data['fatch_data'] = $this->ice4thModel->ice4thFetch();
 		$this->load->view('adminview/ice4th',$data);
 	}

 //user view
 	public function ice4thUser(){
 		$this->load->view('user/ice4th');
 	}	

//admin controll part


 	public function ice4thInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice4th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice4th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice4thModel->ice4thInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice4th/ice4thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice4th',compact($upload_error));
		}
	}

	public function ice4thEdit(){
		$post = $this->input->post('id');
		$data = $this->ice4thModel->ice4thEditFetch($post);
		$this->load->view('admin/ice4thedit',['data'=>$data]);

	}

	public function ice4thUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice4th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
		//&& $this->upload->do_upload() 
			if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice4th/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice4thModel->ice4thUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice4th/ice4thview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice4thedit');
			}
	}

	public function ice4thDelete(){
		$post = $this->input->post('id');
		if($this->ice4thModel->ice4thDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice4th/ice4thview');
	}
	

}