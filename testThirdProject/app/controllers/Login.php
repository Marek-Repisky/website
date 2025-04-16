<?php

/**
 * login class
 */
class Login {

    use Controller;

    public function index($a='', $b='', $c='') 
    {
        
        
        $this->view('login');
    }

}
