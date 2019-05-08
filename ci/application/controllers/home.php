<?php 

class home extends CI_Controller{


	public function homs(){
 		$this->load->view('admin/home');
 	}

 	public function homeview(){	
 		$data['fatch_data'] = $this->homeModel->homeFatch();
 		$this->load->view('adminview/home',$data);
 	} 


 	//teacher controller part
 	public function homeInsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path']   = './uploads/home/';
		$config['allowed_types'] = 'gif|jpg|png';
	
		$this->load->library('upload',$config);

		if($this->form_validation->run() && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/home/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			

			if($this->homeModel->homeINsert($post)){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('home/homeview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/home',compact($upload_error));
		}
	}

	public function homEdit(){
		$post = $this->input->post('id');
		$data = $this->homeModel->homeEditFatch($post);
		$this->load->view('admin/homedit',['data'=>$data]);

	}

	public function homeUpdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/home/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

			if($this->form_validation->run() && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url("uploads/home/".$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->homeModel->homeUpdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('home/homeview');
			}else{
				$upload_error = $this->upload->display_errors();
			$this->load->view('admin/homedit',compact($upload_error));
			}
	}

	public function homeDelete(){
		$post = $this->input->post('id');
		if($this->homeModel->homeDelete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('home/homeview');
	}

}
