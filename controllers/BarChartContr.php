<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarChartContr extends CI_Controller {
	public function index()
	{
		   
		$this->load->database();
		$this->load->view('barchart1');
		//$this->load->model('BarChartModel');
		//$filedetails=$this->BarChartModel->FileDetailsByDate();
		//$res1['FileDetails']=($filedetails);
    	//	$this->load->view('test',$res1);
    	}
       
	
	
}


?>