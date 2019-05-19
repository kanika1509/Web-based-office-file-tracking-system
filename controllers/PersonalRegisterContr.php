<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalRegisterContr extends CI_Controller {

	
public function index()
        {
               $this->load->database();
             $this->load->helper('url');
               $this->load->model('PersonalRegisterModel');
               $resbasic=$this->PersonalRegisterModel->getfiles();
               $data3['files']=$resbasic;
              $this->load->view('PersonalRegisterView',$data3,FALSE);               
                
}
}
?>