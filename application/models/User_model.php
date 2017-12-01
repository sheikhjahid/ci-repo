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
        	return $result[0];
        }//end of function

        public function registerUser($postArr)
        {                
          $str = $this->db->insert('registration', $postArr);
          return $this->db->insert_id();
        }       
        public function showUser()
        {
            $this->db->select("*");
            $query=$this->db->get('registration');
            $result=$query->result();

           return $result;
        }//end of  function
        public function viewSpecificData($id)
        {
           
         $this->db->select('*');
         $this->db->where('id',$id);
         $query=$this->db->get('registration');
         return $query->result();
          
        
        }//end of function

        public function update($id,$field)
        {
            
            $this->db->where('id',$id);           
            $result=$this->db->update('registration',$field);
            // echo $this->db->last_query();
            return $result;

        }//end of function

        public function delete($id,$post)
        {

            $this->db->where('id',$id);
            $query=$this->db->delete('registration');
            return $query;

        }//end of function

        

}//end of class