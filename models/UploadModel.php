<?php
class UploadModel extends CI_MODEL
{
    

    public function UpdateDatabase($filename)
    { 
        $this->db->where('sender_id',$this->session->userdata('DeptId'));
        $this->db->where('file_id',$this->session->userdata('fileid'));
        $query=$this->db->update('mark',array('file'=>$filename));
        //$res=$query->result();
        //return $res;
    }

    
}
?>