<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    Class User extends CI_Controller{
        public function check(){
            $this->load->library('session');
            $this->load->model('User_model');
            $nom=$this->input->post('nom');
            $mdp=$this->input->post('mdp');
            $result=$this->User_model->verifyLogin($nom,$mdp);
            if($verify==false){
                redirect('user/login');
            }
            else{
                $this->session->set_userdata('admin',$result);
                redirect('user/home');
            }
        }
        public function login(){
            $this->load->view('login');
        }
        public function home(){
            $this->load->library('session');
            if($this->session->has_userdata('admin')){
                $data=array();
                $data['admin']=$this->session->admin;
                $this->load->view('home',$data);
            }
            else{
                redirect('user/login');
            }
        }
    }

?>