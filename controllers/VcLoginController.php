<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  VcLoginController extends CI_Controller {
	public function index()
	{
		$this->load->database();

		                $this->load->helper('url');
               $this->load->view('VcLoginView');
           }
     public function process()
	{
		$this->load->database();
		$user=$this->input->post('Vcname');
		$pass=$this->input->post('password');
		if($user=="saumya@gmail.com"&& $pass=="1")
		{
			$this->load->view('VcDashboardView');

		}
		else
		{
			$this->load->helper('url');
    		$data['error']="your account details are invalid";
    		$this->load->view('VcLoginView',$data);
		}

    }
}
       
       ?>