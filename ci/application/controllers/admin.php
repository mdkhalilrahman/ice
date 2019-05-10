<?php 

class admin extends CI_Controller{

public function __construct(){

    parent::__construct();
    if( $this->session->userdata('id') )
    return redirect('admin/adminView');
    
  }

	public function index(){
		$this->load->view('admin/login');
	}

	public function adminView(){
		$this->load->view('adminview/admin');
	}

	public function login(){

		$this->form_validation->set_rules('email','your_email/username','required|min_length[1]');
		$this->form_validation->set_rules('pass','your_password','required|min_length[2]');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");

		if($this->form_validation->run()){

			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$user_id = $this->adminModel->login($email,$pass);
			if($user_id){
				$this->session->set_userdata('id',$user_id);
				$this->session->set_flashdata('success','login successfull...');
				redirect('admin/adminView');
			}else{

				redirect('admin');	
			}
		}else{
			redirect('admin');
		}
	}


}