<?php 
class Contact_modal extends CI_Model {

        function saverecords($name,$mobile,$messge)
		{
			date_default_timezone_set("Asia/Kolkata");
			$date=date("Y-m-d h:i:s");
			$query="insert into contactus values('','$name','$mobile','$messge','$date')";
			$this->db->query($query);
		}
}
?>