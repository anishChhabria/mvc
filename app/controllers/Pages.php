<?php
class pages extends Controller {
    public function __construct(){
       

    }
    public function index(){
        //if logged in the home == post pg
        if(isLoggedIn($_SESSION['user_id'])){
            redirect('posts');
          }
       
       $data=[
           'title'=>'MVC',
           'description'=>'simple social network built on MVC PHP FRAMEWORK'
        ];
        
        $this->view('pages/index',$data);
    }
    public function about(){
        //echo 'returning id no'.$id;
        $data=[
            'title'=>'About Us',
            'description'=>'App to share post with other user'
        ];
        $this->view('pages/about',$data);
    }
}