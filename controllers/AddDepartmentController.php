<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddDepartmentController extends CI_Controller {

	public function index()
	{
       $this->load->helper('url');
        $this->load->database();

      
 $this->load->view('AddDepartmentView');
       
   }
   public function process()
	{
		 
$this->load->database();
         $data = array(
        'dept_id'=>$this->input->post('Department_ID'),
        'dept_name'=>$this->input->post('Department_Name'),
        'password'=>$this->input->post('Password')
          );
        
         $this->load->model('AddDepartmentModel');

          $this->AddDepartmentModel->saverecords('department',$data); 
           //echo $dept;
         //echo $pass;
        echo "Records Saved Successfully";
 
	}
}
?>