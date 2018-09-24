<?php
class principal extends Controller {
    public function __construct(){
       

    }
    public function index(){
        //if logged in the home == post pg
        if(isLoggedIn()){
            redirect('principals');
          }
       
       $data=[
           'title'=>'Welcome Principal Ma\'am',
           'description'=>'simple social network built on VESITams PHP FRAMEWORK'
        ];
        
        $this->view('principal/index',$data);
    }
    
}