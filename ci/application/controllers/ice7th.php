<?php 
 class ice7th extends CI_Controller{
//admin part

	public function ice7ths(){
 		$this->load->view('admin/ice7th');
 	}

 	public function ice7thview(){	
 		$data['fatch_data'] = $this->ice7thModel->ice7thFatch();
 		$this->load->view('adminview/ice7th',$data);
 	}


 //user view
 	public function ice7thUser(){
 		$this->load->view('user/ice7th');
 	}

 	//admin model part

	public function ice7thINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path']   = './uploads/ice7th/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload',$config);
			
		if($this->form_validation->run('add_student') && $this->upload->do_upload()){     
			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice7th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;

			if($this->ice7thModel->ice7thInsert($post)){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice7th/ice7thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('ice7th/ice7th',compact($upload_error));
		}
	}

	public function ice7thedit(){
		$post = $this->input->post('id');
		$data = $this->ice7thModel->ice7theditfatch($post);
		$this->load->view('admin/ice7thedit',['data'=>$data]);

	}

	public function ice7thUpdate($user_id){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path']   = './uploads/ice7th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
			

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice7th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;

				if($this->ice7thModel->ice7thUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice7th/ice7thview');
			}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/ice7thedit',compact($upload_error));
			}
	}

	public function ice7thdelete(){
		$post = $this->input->post('id');
		if($this->ice7thModel->ice7thdalete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice7th/ice7thview');
	}

}
