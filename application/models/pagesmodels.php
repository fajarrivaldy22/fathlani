<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class PagesModels extends CI_Model {

        public function loginuser($data){
            
            $query = $this->db->get_where('user',array(
                'email'=>$data["email"],
                'password'=>$data["password"]
            ));

            if($query->num_rows()==1){
                $data = $query->row(0);
                $sess_data=array(
                    "user"=>$data
                );
                $this->session->set_userdata($sess_data);
            }else{
                $query = $this->db->get_where('user',array(
                    'username'=>$data["email"],
                    'password'=>$data["password"]
                ));
                if($query->num_rows()==1){
                    $data = $query->row(0);
                    $sess_data=array(
                        "user"=>$data
                    );
                    $this->session->set_userdata($sess_data);
                }else{
                    $this->session->set_flashdata("login-alert","Username / E-mail are wrong.");
                }
            }

        }

    }