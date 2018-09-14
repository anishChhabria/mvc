<?php
    class Users extends Controller{
        public function __construct(){

        }

        public function register(){
            //check for post
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //process the form

            }else{
                //INIT data
                // echo 'load form';
                $data=[
                    'name'=>'',
                   ' email'=>'',
                    'password'=>'',
                    'confirm_password'=>'',
                    'name_error'=>'',
                    'email_error'=>'',
                    'password_error'=>'',
                    'confirm_password_error'=>''
                ];
                //load view
                $this->view('users/register',$data);
            }
        }
    }