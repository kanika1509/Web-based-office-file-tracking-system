<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacultyLoginController extends CI_Controller {
	public function index()
	{
		$this->load->database();
		               $this->load->model('LoginPageFTSModel');
               $resbasic=$this->LoginPageFTSModel->getfiles('1');
               $data3['names']=$resbasic;
              
		 $this->load->helper('url');
		$this->load->view('LoginPageFTS1',$data3,FALSE);
			}
	public function process()
	{
		$this->load->database();
		$user=$this->input->post('dropdown');
		$pass=$this->input->post('password');

		$this->load->model('LoginPageFTSModel');
		$res1=$this->LoginPageFTSModel->LoginDetails();
		$var=sizeof($res1);
		$counter=0;

    for($i=0;$i<$var;$i++){
    	//echo $res1[$i]->dept_name." ".$res1[$i]->password." ".$user." ".$pass."<br>";
    	if($res1[$i]->dept_id==$user && $res1[$i]->password==$pass)
    	{
    		//$data=array('username' => $res1[$i]->username,'password' => $res1[$i]->password);
    		//$session_data = array('username' => $res1[$i]->username,'password' => $res1[$i]->password);
    		//$this->session->set_userdata('logged_in',$session_data);
    		$this->session->set_userdata('DeptId',$user);
    		$this->session->set_userdata('DeptName',$res1[$i]->dept_name);
    		$this->load->view('dashboardFTS');
    		$counter=1;

    	}
    	}
    	if($counter==0)
    	{
    		$this->load->helper('url');
    		$data['error']="your account details are invalid";
    		$this->load->view('LoginPageFTS1',$data);
    	}
       
	
	
}
}
?>