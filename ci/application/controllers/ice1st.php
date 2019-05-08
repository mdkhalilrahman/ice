<?php 

class ice1st extends CI_Controller{

	//admin part
	

//admin view	
	public function ice1sts(){
 		$this->load->view('admin/ice1st');
 	}

 	public function ice1stview(){	
 		$data['fatch_data'] = $this->ice1stModel->ice1stFetch();
 		$this->load->view('adminview/ice1st',$data);
 	}
 //user view
 	public function ice1stUser(){
 		$this->load->view('user/ice1st');
 	}

 	
 // admin control
 	public function ice1stINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice1st/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice1st/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice1stModel->ice1stInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice1st/ice1stview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice1sts',compact($upload_error));
		}
	}

	public function ice1stEdit(){
		$post = $this->input->post('id');
		$data = $this->ice1stModel->ice1stEditFetch($post);
		$this->load->view('admin/ice1stedit',['data'=>$data]);

	}

	public function ice1stUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice1st/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);
		//&& $this->upload->do_upload() 
			if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice1st/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice1stModel->ice1stUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice1st/ice1stview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice1stedit');
			}
	}

	public function ice1stDelete(){
		$post = $this->input->post('id');
		if($this->ice1stModel->ice1stDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice1st/ice1stview');
	}
}