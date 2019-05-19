<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('UploadDocuments', array('error' => ' ' ));
        }

        public function do_upload()
        {
                echo "hello 1";
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1000;
              
                $this->load->library('upload', $config);
echo "hello 2";
                if ( ! $this->upload->do_upload('userfile'))
                {
                        echo "hello 4";
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('UploadDocuments', $error);
                }
                else
                {
                        echo "hello 3";
                        echo $this->session->userdata('DeptId');

                         $filename=$_FILES['userfile']['name'];
                         $this->load->model('UploadModel');
                         $this->UploadModel->UpdateDatabase($filename);
                        //$data = array('upload_data' => $this->upload->data());
                 //$this->load->view('CreateFileData', $data);
                }
        }
}
?>