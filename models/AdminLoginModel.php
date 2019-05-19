<?php
class AdminLoginModel extends CI_MODEL
{
	public function getfiles()
{
    $this->db->select('name','password');
    $this->db->from('');
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}