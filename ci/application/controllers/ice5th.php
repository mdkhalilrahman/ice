<?php 

class ice5th extends CI_Controller{


	//admin part
	//
//admin view part

	 public function ice5ths(){
 		$this->load->view('admin/ice5th');
 	}

 	public function ice5thview(){	
 		$data['fatch_data'] = $this->ice5thModel->ice5thFetch();
 		$this->load->view('adminview/ice5th',$data);
 	}

 //user view
 	public function ice5thUser(){
 		$this->load->view('user/ice5th');
 	}

//admin controll part


 	public function ice5thInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice5th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice5th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice5thModel->ice5thInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice5th/ice5thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice5th',compact($upload_error));
		}
	}

	public function ice5thEdit(){
		$post = $this->input->post('id');
		$data = $this->ice5thModel->ice5thEditFetch($post);
		$this->load->view('admin/ice5thedit',['data'=>$data]);

	}

	public function ice5thUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice5th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
		//&& $this->upload->do_upload() 
			if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice5th/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice5thModel->ice5thUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice5th/ice5thview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice5thedit');
			}
	}

	public function ice5thDelete(){
		$post = $this->input->post('id');
		if($this->ice5thModel->ice5thDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice5th/ice5thview');
	}

}