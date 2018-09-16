<?php
  class Posts extends Controller {

    public function __construct(){
        if(!isLoggedIn($_SESSION['user_id'])){
        redirect('users/login');
      }
    }

    public function index(){
      $data = [];

      $this->view('posts/index', $data);
    
    }
    // //to check wether the user has logged in or not
    // public function isLoggedIn(){
    //     if(isset($_SESSION['user_id'])){
    //       return true;
    //     } else {
    //       return false;
    //     }
    //   }
  
}