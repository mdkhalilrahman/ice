<?php 

class admin extends CI_Controller{

	public function index(){

	}

	//ice1st batch controll part

	



//ice6th batch controll pa6th
	public function ice6thINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice6th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice6th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->model->ice6thInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('user/ice6thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice6th',compact($upload_error));
		}
	}

	public function ice6thedit(){
		$post = $this->input->post('id');
		$data = $this->model->ice6theditfatch($post);
		$this->load->view('admin/ice6thedit',['data'=>$data]);

	}

	public function ice6thupdate($user_id){

			if($this->form_validation->run('add_student')){

				$post = $this->input->post();

				if($this->model->ice6thupdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('user/ice6thview');
			}else{

				$this->load->view('admin/ice6thedit');
			}
	}

	public function ice6thdelete(){
		$post = $this->input->post('id');
		if($this->model->ice6thdalete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('user/ice6thview');
	}



//ice2nd batch controll part
	

	public function ice2ndINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice2nd/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice2nd/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->model->ice2ndInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('user/ice2ndview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice2nd',compact($upload_error));
		}
	}

	public function ice2ndedit(){
		$post = $this->input->post('id');
		$data = $this->model->ice2ndeditfatch($post);
		$this->load->view('admin/ice2ndedit',['data'=>$data]);

	}

	public function ice2ndupdate($user_Id){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice2nd/';
		$config['allowed_types'] = 'gif|jpg|png';


		 $this->load->library('upload',$config);
		 //&& $this->upload->do_upload()
		if($this->form_validation->run() && $this->upload->do_upload('userfile')){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice2nd/".$data['raw_name'].$data['file_ext']);
			$posts['img'] = $image_path;
			

			if($this->model->ice2ndupdate($user_Id,$posts)){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('user/ice2ndview');
		}else{
			//$upload_error = $this->upload->display_errors();
			//$this->load->view('admin/ice2ndedit',compact($upload_error));
			//$this->load->view('admin/ice2ndedit');
			echo "validation failed";
		}
	}

	public function ice2nddelete(){
		$post = $this->input->post('id');
		if($this->model->ice2nddalete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('user/ice2ndview');
	}


	//ice3rd batch controll part

	

	//ice4th batch controll part

	

	//ice5th batch controll part

	

	

	//ice7th batch controll part

	public function ice7thINsert(){

		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		$config['upload_path'] = './uploads/ice7th/';
		$config['allowed_types'] = 'gif|jpg|png';


		$this->load->library('upload',$config);

		if($this->form_validation->run('add_student') && $this->upload->do_upload()){

			$post = $this->input->post();
			$data = $this->upload->data();
			$image_path = base_url("uploads/ice7th/".$data['raw_name'].$data['file_ext']);
			$post['img'] = $image_path;
			$all = $this->model->ice7thInsert($post);

			if($all){
				$this->session->set_flashdata('ice1st','data insert success...');
			}else{
				$this->session->set_fleshdata('ice1stnot','data is not insert');
			}
			redirect('user/ice7thview');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/ice7th',compact($upload_error));
		}
	}

	public function ice7thedit(){
		$post = $this->input->post('id');
		$data = $this->model->ice7theditfatch($post);
		$this->load->view('admin/ice7thedit',['data'=>$data]);

	}

	public function ice7thupdate($user_id){

			if($this->form_validation->run('add_student')){

				$post = $this->input->post();

				if($this->model->ice7thupdate($user_id,$post)){
					$this->session->set_flashdata('success','edit data successfull...');
				}else{
					$this->session->set_flashdata('fail','edit data failed...');
				}
				redirect('user/ice7thview');
			}else{

				$this->load->view('admin/ice7thedit');
			}
	}

	public function ice7thdelete(){
		$post = $this->input->post('id');
		if($this->model->ice7thdalete($post)){
			$this->session->set_flashdata('success','Delete data successfull...');
		}else{
			$this->session->set_flashdata('fail','Delete data failed...');	
		}
		redirect('user/ice7thview');
	}


}