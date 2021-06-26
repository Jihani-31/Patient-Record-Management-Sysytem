<?php

class Register extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Reg_Model');
		$this->load->helper(array('form'));
		$this->load->library(array('form_validation'));
	}   

	public function savedata()
	{
		

		$this->load->view('register');
		if($this->input->post('save'))
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$destination=$this->input->post('destination');
			$this->Reg_Model->saverecords($name,$email,$mobile,$destination);
			echo "Records saved";
			redirect("register/savedata");
			
		}
	}
	public function displaydata(){
		$result['data']=$this->Reg_Model->display_users();
		$this->load->view('display',$result); 
	}

	public function deletedata(){
		$id=$this->input->get('id');
		$this->Reg_Model->delete_users($id);
		redirect("register/displaydata");

	}

	public function updatedata(){
		$id=$this->input->get('id');
		$result['data']=$this->Reg_Model->displayusersbyid($id);
		$this->load->view('update',$result); 
		if($this->input->post('update')){
			$id=$this->input->get('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$destination=$this->input->post('destination');
			$this->Reg_Model->update_users($id,$name,$email,$mobile,$destination);
			echo "Record saved successfully";
			redirect("register/displaydata");

		}

	}

	public function form(){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('register');
			}
			else
			{
				$this->load-> view('success');
			}

		}


	

}
?>