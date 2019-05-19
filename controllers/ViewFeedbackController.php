<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewFeedbackController extends CI_Controller {
	public function index()
	{
		   echo 'hello';
		 $this->load->helper('url');
	//doubtfull!!!
			//}
//public function process()
	//{    
		 echo 'hello';
		$this->load->database();
	

		$this->load->model('ViewFeedbackModel');
		$filedetails=$this->ViewFeedbackModel->FileDetails();
		$res1['FileDetails']=$filedetails;
		$var=sizeof($filedetails);
		echo $var;
		$counter=0;
if($var!=0)
{$this->load->helper('url');
    		$this->load->view('ViewFeedbackView',$res1);
    	}
    	else if($var==0)
    	{
    		$this->load->helper('url');
    		$data['error']="no feedbacks for u today!!  ";
    		$this->load->view('ViewFeedbackView',$data);
    	}
       
	
	
}
}

       
?>