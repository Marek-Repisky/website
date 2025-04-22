<?php

/**
 * post class
 */
class Post {

    use Controller;

    public function index() 
    {
        $this->view('post');
    }

}
