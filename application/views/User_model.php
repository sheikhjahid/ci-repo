<?php

class user_model extends CI_Model 
{

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        public function checkUser($username,$password)
        {
        	$this->db->select("*");
        	$this->db->where("username",$username);
        	$this->db->where("password",$password);
        	$query=$this->db->get('registration');
        	$result=$query->result();
        	/*echo $this->db->last_query();
        	 echo '<pre>';
        	 print_r($result);
        	 echo '</pre>';*/
        	return $result[0];
        }//end of function


        public function registerUser($username,$password,$email)
        {
                if(isset($_POST['submit']))
                {
                $data = array(

                'username' => $username1, 
                'email' => $email1, 
                'password' => $password1
        );
        }

          $str = $this->db->insert_string('registration', $data);
          //echo $str;
         }       
               

}