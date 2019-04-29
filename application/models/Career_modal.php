<?php 
class Career_modal extends CI_Model {

        function saverecords($profile,$name,$emails,$qualification,$mobile,$status,$experience,$upload,$profiledata)
		{
			date_default_timezone_set("Asia/Kolkata");
			$date=date("Y-m-d h:i:s");
			$query="INSERT INTO `career` (`id`, `profile`, `name`, `email`, `qualification`, `phone`, `status`, `experience`, `resume`,`profiledata`,`date`) VALUES ('', '$profile','$name','$emails','$qualification','$mobile','$status','$experience','$upload','$profiledata','$date')";
			$this->db->query($query);
		}
}
?>