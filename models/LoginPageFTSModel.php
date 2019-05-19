<?php
class LoginPageFTSModel extends CI_MODEL
{
	public function getfiles($type)
{
    $this->db->select('dept_id,dept_name');
    $this->db->from('department');
           $this->db->where('type',$type);

    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}

	public function LoginDetails() { 
           $this->db->select('dept_id,dept_name,password');
           $this->db->from('department');
           
           $query=$this->db->get();
           $res   = $query->result();  
           return $res;
	}
}
?>