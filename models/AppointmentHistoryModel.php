<?php
class AppointmentHistoryModel extends CI_MODEL
{
	public function getfiles()
{
    $this->db->select('file_id, sender_id, date_and_time,dept_name');
    $this->db->from('mark');
    $this->db->where('mark.status',0);
      $this->db->where("receiver_id",$this->session->userdata('DeptId'));
    $this->db->join('department', 'mark.sender_id = dept_id');
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}
}
?>