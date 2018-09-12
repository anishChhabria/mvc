<?php
class pages extends Controller {
    public function __construct(){
        // echo 'pages loaded';
    }
    public function index(){
       // $this->view('hello');
       $data=[
           'title'=>'Welcome'
        ];
        $this->view('pages/index',$data);
    }
    public function about(){
        //echo 'returning id no'.$id;
        $data=[
            'title'=>'About Us'
        ];
        $this->view('pages/about',$data);
    }
}