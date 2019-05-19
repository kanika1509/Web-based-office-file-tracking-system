<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryContr extends CI_Controller {
	public function index()
	{
		   
		 $this->load->helper('url');
		$this->load->view('TrackPageView');
			}
	public function process()
	{
		
		$this->load->database();
		$this->load->model('HistoryModel');
		$file_id=isset($_REQUEST['file_id'])?$_REQUEST['file_id']:NULL;

		
		$filedetails=$this->HistoryModel->FileDetails($file_id);
		$res2['FileDetails1']=$filedetails;
		$var=sizeof($filedetails);
		$counter=0;

$this->load->helper('url');
  	$this->load->view('HistoryView',$res2);
    	}
    	
      
}
?>