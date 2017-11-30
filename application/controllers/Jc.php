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
		die();
	}

	
	public function authentication()
	{
        $post_arr=$this->input->post();
		/*$username1=$post_arr['username'];
		$password1=$post_arr['password'];
		$email1=$post_arr['email'];*/
		$username=$post_arr['username'];
		$password=$post_arr['password'];
		//$id=$post_arr['id'];
		//$user_details=$this->user_model->view($id);
		$user_details=$this->user_model->checkUser($username,$password);

		if(count($user_details))
		{
			$args['email']=$user_details->email;
			$args['username']=$user_details->username;
			$args['name']=$user_details->firstname.' '.$user_details->lastname;
			$this->session->set_userdata('user_details',$args);
			redirect('jc/dashboard');
		    //die();
		}
		else
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			//die();
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


	public function updateData()
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
	
		//$data['update_specific_data']=$this->user_model->update($id);
		$id=$this->input->get('id');
		$update_arr= array(
			'firstname' =>$this->input->get('firstname'),
			'phone' => $this->input->get('phone'),
			'email' => $this->input->get('email'),
			'address'=>$this->input->get('address'),
			'username'=>$this->input->get('username'),
			'password'=>$this->input->get('password')

		);
		$data['specific_data']=$this->user_model->update($id,$update_arr);
		
		$this->load->view('update_data');

	}//end of function
	public function deleteData($id)
	{
		$id=$this->input->get('id');
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','Username and Password doesnot match');
			redirect('jc/login');
			die();
		}//end of if
		$userdata=$this->session->userdata('user_details');
		$data=array();	
		$data=$userdata;
		$data['delete_specific_data']=$this->user_model->delete($id);
		$this->load->view('delete_page',$data);
	}//end of fuunction
        
}//end of class
