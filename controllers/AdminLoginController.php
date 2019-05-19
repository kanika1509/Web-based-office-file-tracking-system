<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  AdminLoginController extends CI_Controller {
	public function index()
	{
		$this->load->database();

		                $this->load->helper('url');
               $this->load->view('AdminLoginView');
           }
     public function process()
	{
		$this->load->database();
		$user=$this->input->post('adminname');
		$pass=$this->input->post('password');
		if($user=="saumya"&& $pass=="1")
		{
			$this->load->view('AdminDashboardView');

		}
		else
		{
			$this->load->helper('url');
    		$data['error']="your account details are invalid";
    		$this->load->view('AdminLoginView',$data);
		}

    }
}
       
       ?>