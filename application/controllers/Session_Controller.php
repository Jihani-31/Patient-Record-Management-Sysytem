<?php

    class Session_Controller extends CI_Controller{

        public function __construct(){
            parent:: __construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function index(){
            $this->load->view('index');
        }

        public function flash(){
            $this->session->set_flashdata('sess', 'session message');
            redirect(base_url('index.php/SessionController/index'));
        }

    }

?>