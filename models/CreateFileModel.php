<?php
class CreateFileModel extends CI_MODEL
{
    public function NewFile($table,$data)
    { 
        $query=$this->db->insert($table, $data);
        
        //$res=$query->result();
        //return $res;
    }
    public function MarkFile($table,$data)
    { 
        $query=$this->db->insert($table, $data);
        //$res=$query->result();
        //return $res;
    }

    public function UpdateDatabase($table,$data1,$data2)
    { 
        $this->db->where('dept_id',$data1);
        $query=$this->db->update($table,array('counter'=>$data2));
        //$res=$query->result();
        //return $res;
    }





    public function fileid($data3)
    {
        $this->db->select('dept_id,counter');
        $this->db->from('department');
        $this->db->where('dept_id',$data3);
           $query2=$this->db->get();
           $res   = $query2->result();  
           return $res;
    }
    public function getfiles()
{
    $this->db->select('dept_id,dept_name');
    $this->db->from('department');
    $query=$this->db->get();
    $resbasic=$query->result();
    return $resbasic;
}
    
}
?>