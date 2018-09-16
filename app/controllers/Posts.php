<?php
class Posts extends Controller {

    public function __construct(){
        // echo 'Post loaded';
    }
    public function index(){
        $data=[];
        $this-> view('posts/index',$data);
        
    }

}