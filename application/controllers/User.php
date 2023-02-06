<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    require('SessionController.php');
    Class User extends SessionController{

        public function check(){
            $this->load->model('User_model');
            $nom=$this->input->post('nom');
            $mdp=$this->input->post('mdp');
            $result=$this->User_model->verifyLogin($nom,$mdp);
            if($result==false){
                redirect('welcome/login');
            }
            else{
                $this->session->set_userdata('admin',$result);
                var_dump($this->session);
                redirect('user/home');
            }
        }
        public function home(){
            var_dump($this->session);
            $data=array();
            $data['admin']=$this->session->admin;
            $data['page']='home';
            $this->load->view('template',$data);    
        }
        public function disconnect(){
            $this->session->unset_userdata('admin');
            redirect('welcome/login');
        }
    }
?>