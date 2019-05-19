<?php
class FeedbackModel extends CI_Model 
{
	public function saverecords($table,$data)
	{
	$query=$this->db->insert($table,$data);
	
	}
}
?>
