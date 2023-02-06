<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class SessionController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            if(!$this->session->has_userdata('admin')){
                redirect('welcome/login');
            }
        }
    }
?>
