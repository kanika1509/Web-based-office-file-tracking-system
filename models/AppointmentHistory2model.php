<?php
class AppointmentHistory2model extends CI_MODEL
{
	public function getfiles($table ,$data)
{
  
    $this->db->select('file.file_id AS file_id, file.file_name AS file_name, file.file_type AS file_type, file.subject AS subject,  file.text AS text, mark.sender_id AS sender_id,mark.receiver_id AS receiver_id,file.file0 AS file0');
    $this->db->from('file,mark');
      $this->db->where('file.file_id',$data );
     $this->db->where('mark.file_id',$data);
    
     
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}
}
?>