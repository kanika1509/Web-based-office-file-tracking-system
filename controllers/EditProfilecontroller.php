<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditProfilecontroller extends CI_Controller {

	

       public function index(){
               
            
               
               $this->load->helper('url');
               $name=$this->session->userdata('DeptId');
                $this->load->view($name); 
              //if($this->session->userdata('DeptId')=="UIET-CSE")
              //{
              //$this->load->view('$this->session->userdata('DeptId')Profileview'); 
              //}
              //else
              ///{ $this->load->view('dashboardFTS1'); }
                           
                       
}}
?>