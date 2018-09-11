<?php
class pages extends Controller {
    public function __construct(){
        // echo 'pages loaded';
    }
    public function index(){
       // $this->view('hello');
        $this->view('pages/index');
    }
    public function about(){
        //echo 'returning id no'.$id;
        $this->view('pages/about');
    }
}