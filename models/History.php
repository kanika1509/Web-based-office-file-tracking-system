<?php
class HistoryModel extends CI_MODEL
{
	public function FileDetails($data) { 
           $this->db->select('sender_id,receiver_id,date_and_time,comments,mark.status,department1.dept_name AS sender_name,department2.dept_name AS receiver_name');
           $this->db->from('mark');
           $this->db->where('file_id',$data);
           $this->db->join('department AS department1', 'mark.sender_id = department1.dept_id');
           $this->db->join('department AS department2', 'mark.receiver_id = department2.dept_id');
           $query=$this->db->get();
           $res   = $query->result();  
           return $res;
	}

}
?>