<?php
class PersonalRegisterModel extends CI_MODEL
{
	public function getfiles()
{
    $this->db->select('file_id, receiver_id, date_and_time,dept_name');
   $this->db->group_by('file_id'); 
    $this->db->from('mark');
      $this->db->where("sender_id",$this->session->userdata('DeptId'));
    $this->db->join('department', 'mark.receiver_id = dept_id');
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}
}
?>