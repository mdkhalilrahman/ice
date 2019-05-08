<?php 

class ice6th extends CI_Controller{


	//admn part

//admin view

	public function ice6ths(){
 		$this->load->view('admin/ice6th');
 	}

 	public function ice6thview(){	
 		$data['fatch_data'] = $this->ice6thModel->ice6thFetch();
 		$this->load->view('adminview/ice6th',$data);
 	}

 //user view
 	public function ice6thUser(){
 		$this->load->view('user/ice6th');
 	}


 //admin controll part
 	

 	public function ice6thInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice6th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice6th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice6thModel->ice6thInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice6th/ice6thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice6th',compact($upload_error));
		}
	}

	public function ice6thEdit(){
		$post = $this->input->post('id');
		$data = $this->ice6thModel->ice6theditFetch($post);
		$this->load->view('admin/ice6thedit',['data'=>$data]);

	}

	public function ice6thUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice6th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
		//&& $this->upload->do_upload() 
			if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice6th/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice6thModel->ice6thUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice6th/ice6thview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice6thedit');
			}
	}

	public function ice6thDelete(){
		$post = $this->input->post('id');
		if($this->ice6thModel->ice6thDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice6th/ice6thview');
	}

}