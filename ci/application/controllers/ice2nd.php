<?php 

class ice2nd extends CI_Controller{

	//admin part
	

//admin view	

	public function ice2nds(){
 		$this->load->view('admin/ice2nd');
 	}

 	public function ice2ndview(){	
 		$data['fatch_data'] = $this->ice2ndModel->ice2ndFetch();
 		$this->load->view('adminview/ice2nd',$data);
 	}

 //user view
 	public function ice2ndUser(){
 		$this->load->view('user/ice2nd');
 	}


//admin controll 
	
	public function ice2ndInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice2nd/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice2nd/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->ice2ndModel->ice2ndInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('ice2nd/ice2ndview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice2nd',compact($upload_error));
		}
	}

	public function ice2ndEdit(){
		$post = $this->input->post('id');
		$data = $this->ice2ndModel->ice2ndEditFetch($post);
		$this->load->view('admin/ice2ndedit',['data'=>$data]);

	}

	public function ice2ndUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice2nd/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);


	
		//&& $this->upload->do_upload() 
		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/ice2nd/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->ice2ndModel->ice2ndUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('ice2nd/ice2ndview');
			}else{
				//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice1stedit',compact($upload_error));
			$this->load->view('admin/ice2ndedit');
			}
	}

	public function ice2ndDelete(){
		$post = $this->input->post('id');
		if($this->ice2ndModel->ice2ndDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('ice2nd/ice2ndview');
	}

}