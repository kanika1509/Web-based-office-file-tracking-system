<?php
class ForwardPageFTSModel extends CI_MODEL
{
	public function getfiles()
{
    $this->db->select('dept_id,dept_name');
    $this->db->from('department');
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}
    public function MarkFile($table,$data)
    { 
        $query=$this->db->insert($table, $data);
        //$res=$query->result();
        //return $res;
    }
    public function UpdateStatus($table,$file_id,$sender_id)
    {
    	$data2=1;
    	$this->db->set('status', 1, FALSE);
 $this->db->where('file_id',$file_id);
        $this->db->where('receiver_id',$sender_id);
$this->db->update('mark'); 




      //  $this->db->where('file_id',$file_id);
        //$this->db->where('receiver_id',$sender_id);
        //$data2=1;
        //$query=$this->db->update($table,array('status'=>$data2));
    }
}
?>