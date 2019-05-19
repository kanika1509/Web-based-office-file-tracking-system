<?php
class BarChartModel extends CI_MODEL
{
  public function FileDetailsByDate() { 
           $this->db->select('file_id,max(DATE(date_and_time)) AS max_date,min(DATE(date_and_time)) AS min_date');
           $this->db->from('mark');
        $this->db->group_by('file_id');
        // $this->db->where('receiver_id',$this->session->userdata('DeptId'));
           $query=$this->db->get();
           $res   = $query->result();  
           return $res;
  }

}
?>