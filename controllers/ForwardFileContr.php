<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForwardFileContr extends CI_Controller {

	
public function index()
        {
             $this->load->helper('url');
              $this->load->database();
              $this->load->model('ForwardPageFTSModel');
               $resbasic=$this->ForwardPageFTSModel->getfiles();
               $dataNew['departments']=$resbasic;
$dataNew['forward_id']=$this->input->post('forward_id');

            $this->load->view('ForwardFileView',$dataNew);               
                
}
	public function process()
	{
	    
	$data=0;
	$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1000;
              
                $this->load->library('upload', $config);
$filename=$_FILES['userfile']['name'];

//echo $this->upload->do_upload('userfile');
		$data2=array('file_id'=>$this->input->post('file_id'),'sender_id'=>$this->input->post('sender_id'),
		'receiver_id'=>$this->input->post('receiver_id'),'comments'=>$this->input->post('comments'),'status'=>$data,'file1'=>$filename);

$file_id=$this->input->post('file_id');
$sender_id=$this->input->post('sender_id');
	$this->load->database();
	$this->load->model('ForwardPageFTSModel');
	$this->ForwardPageFTSModel->MarkFile('mark',$data2);
	$this->ForwardPageFTSModel->UpdateStatus('mark',$file_id,$sender_id);
	$this->load->view('dashboardFTS1');
	}
}

?>