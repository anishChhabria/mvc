<?php
class pages extends Controller {
    public function __construct(){
       

    }
    public function index(){
       
       $data=[
           'title'=>'MVC'
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