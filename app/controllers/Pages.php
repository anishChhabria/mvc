<?php
class pages extends Controller {
    public function __construct(){
       

    }
    public function index(){
       
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