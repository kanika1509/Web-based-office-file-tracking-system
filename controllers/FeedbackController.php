<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackController extends CI_Controller {

	public function index()
	{
       $this->load->helper('url');
        $this->load->database();

      
 $this->load->view('FeedbackView');
       
   }
   public function process()
	{
		 
$this->load->database();
         $data = array(
        'sender_name'=>$this->input->post('sender_name'),
        'feedback'=>$this->input->post('feedback'),
        
        'contactno'=>$this->input->post('contactno')
          );
        
         $this->load->model('FeedbackModel');

          $this->FeedbackModel->saverecords('feedback',$data); 
           //echo $dept;
         //echo $pass;
        echo "feedback sent Successfully";
 
	}
}
?>