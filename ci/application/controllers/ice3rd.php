<?php 

class ice3rd extends CI_Controller{

	//admin part
	//
	//
//admin view
	public function ice3rds(){
 		$this->load->view('admin/ice3rd');
 	}

 	public function ice3rdview(){	
 		$data['fatch_data'] = $this->ice3rdModel->ice3rdFetch();
 		$this->load->view('adminview/ice3rd',$data);
 	}

 //user view
 	public function ice3rdUser(){
 		$this->load->view('user/ice3rd');
 	}

 	
 // admin controll part
 	
 	public function ice3rdInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice3rd/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice3rd/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice3rdModel->ice3rdInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice3rd/ice3rdview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice1sts',compact($upload_error));
		}
	}

	public function ice3rdEdit(){
		$post = $this->input->post('id');
		$data = $this->ice3rdModel->ice3rdEditFetch($post);
		$this->load->view('admin/ice3rdedit',['data'=>$data]);

	}

	public function ice3rdUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice3rd/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
		//&& $this->upload->do_upload() 
			if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice3rd/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice3rdModel->ice3rdUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice3rd/ice3rdview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice3rdedit');
			}
	}

	public function ice3rdDelete(){
		$post = $this->input->post('id');
		if($this->ice3rdModel->ice3rdDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice3rd/ice3rdview');
	}


}