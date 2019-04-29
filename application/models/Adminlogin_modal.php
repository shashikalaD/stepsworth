<?php 
class Adminlogin_modal extends CI_Model {

        function selectrecord($username,$password)
		{
			$query_str="SELECT * FROM adminlogin where username='$username' and password='$password'";
			$query=$this->db->query($query_str);
			$count=$query->num_rows();
			return $count;
		}
		 function placementdetails()
		{
			$query = $this->db->get('career');  
            return $query->result(); 
		}
		 function contactdetails()
		{
			$query = $this->db->get('contactus');  
            return $query->result(); 
		}
}
?>