<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppointmentHistoryFTS extends CI_Controller {

	
public function index()
        {
               $this->load->database();
             $this->load->helper('url');
               $this->load->model('AppointmentHistoryModel');
               $resbasic=$this->AppointmentHistoryModel->getfiles();
               $data3['files']=$resbasic;
              $this->load->view('AppointmentHistory',$data3,FALSE);               
                
}
}
?>