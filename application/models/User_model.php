<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function getAdmin(){
            $admin=array();
            $admin['id']=1;
            $admin['nom']='admin';
            $admin['mdp']='123456';
            echo $admin['nom'];
            return $admin;
        }
        public function verifyLogin($name,$mdp){
            $admin=$this->getAdmin();
            if($name!=$admin['nom'] || $mdp!=$admin['mdp']){
                return false;
            }
            return $admin;
        }
    }
?>