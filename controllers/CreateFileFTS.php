<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateFileFTS extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('CreateFileModel');
        $resbasic=$this->CreateFileModel->getfiles();
        $data3['names']=$resbasic;
              
		$this->load->view('CreateFile',$data3,FALSE);
	}
	public function process()
	{
		$data4=$this->input->post('sender_id');
		$this->load->database();
	    $this->load->model('CreateFileModel');
		$fileid1=$this->CreateFileModel->fileid($data4);
		$counter=($fileid1[0]->counter)+1;
		$this->CreateFileModel->UpdateDatabase('department',$data4,$counter);
		$this->load->database();
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1000;
              
                $this->load->library('upload', $config);
$filename0=$_FILES['userfile0']['name'];
$filename1=$_FILES['userfile1']['name'];
$filename2=$_FILES['userfile2']['name'];
$filename3=$_FILES['userfile3']['name'];
echo $filename0;
echo $filename1;
echo $filename2;
echo $filename3;
echo $this->upload->do_upload('userfile0');
echo $this->upload->do_upload('userfile1');
echo $this->upload->do_upload('userfile2');
echo $this->upload->do_upload('userfile3');

		$data=array('file_id'=>$data4."_".$counter,'file_name'=>$this->input->post('file_name'),
		'file_type'=>$this->input->post('file_type'),
		'subject'=>$this->input->post('subject'),
		
		'text'=>$this->input->post('text'),'file0'=>$filename0);

		$data2=array('file_id'=>$data4."_".$counter,'sender_id'=>$this->input->post('sender_id'),
		'receiver_id'=>$this->input->post('receiver_id'),'comments'=>$this->input->post('text'),'file0'=>$filename0,'file1'=>$filename1,'file2'=>$filename2,'file3'=>$filename3);
		$this->load->model('CreateFileModel');
		$this->CreateFileModel->NewFile('file',$data);
		$this->CreateFileModel->MarkFile('mark',$data2);
		//$fileid2=$data4."_".$counter;
		//echo $fileid2;
		//$this->session->set_userdata('fileid',($data4."_".$counter));
		//$this->load->view('UploadDocuments',FALSE);

		$this->load->view('CreateFileData',$data,FALSE);
	}
}
?>