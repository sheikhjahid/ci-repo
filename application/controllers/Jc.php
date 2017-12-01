<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jc extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		///$this->get_value();

		$this->load->view('welcome_message');
	}
	public function login()
	{
		if(!$this->session->set_userdata('user_details'))
		{
			$this->load->view('login');
			//die();			
		}
		else
		{
			redirect('jc/authentication');
		    
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_details');		
		redirect('jc/login');
		//die();
	}

	
	public function authentication()
	{
        $post_arr=$this->input->post();
		
		$username=$post_arr['username'];
		$password=$post_arr['password'];
		
		$user_details=$this->user_model->checkUser($username,$password);


		if(count($user_details))
		{
			$args['email']=$user_details->email;
			$args['username']=$user_details->username;
			$args['name']=$user_details->firstname.' '.$user_details->lastname;
			$this->session->set_userdata('user_details',$args);


			redirect('jc/dashboard');
		    die();
		}
		else
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}
		
	}//end of function
	public function dashboard()
	{
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
		$this->load->view('dashboard',$data);
	
		
	}//end of function

	public function register()
	{
		$post=$this->input->post();
		unset($post['submit']);
		echo $str=$this->user_model->registerUser($post);
		
		if($str)
		{
			$msg='User Registration successfull, <a href="'.base_url().'/jc/login">Login</a>';
			$this->session->set_flashdata('success_message',$msg);
			redirect('jc/successMessage');	
			die();	
		}
	}

	public function successMessage()
	{
     	$this->load->view('Success');
	}//end of function

	public function viewtable()
	{
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
        $data['data']=$this->user_model->showUser();
       $this->load->view('data_dynamic',$data);

	}//end of function

	public function viewdata($id)
	{

		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
		$data['row']=$this->user_model->viewSpecificData($id);
		$this->load->view('viewdata',$data);
    }//end of function    


	public function updateData($id)
	{
		
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
	
		$data['specific_data']=$this->user_model->viewSpecificData($id);	
		$this->load->view('update_data',$data);

	}//end of function

	public function update_action_data($id)
	{
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;			
		$post=$this->input->post();
		unset($post['update']);
		$result=$this->user_model->update($id,$post);
		if($result==1)
		{
			$this->session->set_flashdata('viewtable_msg','Userdata updated');
			redirect('jc/viewtable');
			die();
		}

	}

	public function deleteData($id)
	{
		
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
		$post=$this->input->post();
		unset($post['delete']);
		$query=$this->user_model->delete($id,$post);
		if($query==1)
		{
		$this->session->set_flashdata('deletetable_msg','Userdata deleted successfully');
	    redirect('jc/viewtable',$data);
	    die();
		}
	    //success message print
	    //$post=$this->input->post();
		// unset($post['delete']);
		// echo $str=$this->user_model->delete($id,$post);
		
		// if($str)
		// {
		// 	$msg='Deletion successfull';
		// 	$this->session->set_flashdata('delete_message',$msg);
		// 	$this->load->view('Success.php');		
		// }
	}//end of fuunction

        
}//end of class
