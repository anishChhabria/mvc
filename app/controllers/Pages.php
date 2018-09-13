<?php
class pages extends Controller {
    public function __construct(){
        // echo 'pages loaded';
        $this->postModel = $this->model('Post');

    }
    public function index(){
        $post= $this->postModel->getPosts();
        // $this->view('hello');
       $data=[
           'title'=>'Welcome',
           'posts' => $post
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