<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppointmentHistory2controller extends CI_Controller {

	
public function index()
        {
                
                 
               $this->load->database();
             $this->load->helper('url');

               $this->load->model('AppointmentHistory2model');
               $id=isset($_REQUEST['id'])?$_REQUEST['id']:NULL;
             
           $resbasic=$this->AppointmentHistory2model->getfiles( 'file',$id);
               $data3['files']=$resbasic;
               //echo $resbasic['file.file_id'];
             $this->load->view('AppointmentHistory2view',$data3,FALSE);  
                            
                
}

	 

}
?>