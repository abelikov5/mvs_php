<?php


class Pages extends Controller {
    function __construct () {
//        $this->postModel = $this->model('Post');
    }
    function index () {
//        $post = $this->postModel->
        $data = [
            'title' => 'Welcome to MVC PHP framework',
//            'posts' => $this->postModel->getPosts(),
        ];
        $this->view('pages/index', $data);
//        echo 'index';
    }
    function about($arr) {
//        echo 'about '.'<br>';
//        var_dump($arr);
    }
}