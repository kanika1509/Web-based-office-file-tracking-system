<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrackPageController1 extends CI_Controller {
	public function index()
	{
		   
		 $this->load->helper('url');
		$this->load->view('TrackPageView1');
			}
	public function process()
	{
		$this->load->database();
		$file_id=$this->input->post('file_id');

		$this->load->model('TrackPageModel1');
		$filedetails=$this->TrackPageModel1->FileDetails($file_id);
		$res1['FileDetails']=$filedetails;
		$var=sizeof($filedetails);
		$counter=0;
if($var!=0)
{$this->load->helper('url');
    		$this->load->view('FileRecordView1',$res1);
    	}
    	else if($var==0)
    	{
    		$this->load->helper('url');
    		$data['error']="This file does not exist in database Please renter your File Id ";
    		$this->load->view('TrackPageView1',$data);
    	}
       
	
	
}

public function process2()
	{
		$this->load->database();
		$file_id=$this->input->post('date');

		$this->load->model('TrackPageModel');
		$filedetails=$this->TrackPageModel->FileDetailsByDate($file_id);
		$res1['FileDetails']=$filedetails;
		$var=sizeof($filedetails);
		$counter=0;
if($var!=0)
{$this->load->helper('url');
    		$this->load->view('FileRecordView',$res1);
    	}
    	else if($var==0)
    	{
    		$this->load->helper('url');
    		$data['error1']="This file does not exist on this date in database Please renter your date ";
    		$this->load->view('TrackPageView',$data);
    	}
       
	
	
}



}
?>