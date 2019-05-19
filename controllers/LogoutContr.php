<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutContr extends CI_Controller {

	
public function index()
        {
                $this->session->sess_destroy();
                $this->load->helper('url');
        redirect('http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/index.php/MainPageController','refresh');
}
}
?>