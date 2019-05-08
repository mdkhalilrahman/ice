<?php
class teacher extends CI_Controller{


	public function teachers(){
 		$this->load->view('admin/teacher');
 	}

 	public function teacherview(){	
 		$data['fatch_data'] = $this->teachermodel->teacherfetch();
 		$this->load->view('adminview/teacher',$data);
 	}


 //user view
 	public function teacherUser(){
 		$this->load->view('user/teacher');
 	}

//teacher controller part
 	public function teacherINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/teacher/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']		= '300000';	


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_teacher') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/teacher/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			

			if($this->teachermodel->teacherInsert($post)){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('teacher/teacherview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/teacher',compact($upload_error));
		}
	}

	public function teacheredit(){
		$post = $this->input->post('id');
		$data = $this->teachermodel->teachereditfatch($post);
		$this->load->view('admin/teacheredit',['data'=>$data]);

	}

	public function teacherupdate($user_id){
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/teacher/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']		= '20971520';


		$this->load->library('upload',$config);

			if($this->form_validation->run('add_teacher') && $this->upload->do_upload()){

				$post = $this->input->post();
				$data = $this->upload->data();
				$image_path = base_url('uploads/teacher/'.$data['raw_name'].$data['file_ext']);
				$post['img'] = $image_path;

				if($this->teachermodel->teacherupdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('teacher/teacherview');
			}else{

				$this->load->view('admin/teacheredit');
			}
	}

	public function teacherdelete(){
		$post = $this->input->post('id');
		if($this->teachermodel->teacherdalete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('teacher/teacherview');
	}
}