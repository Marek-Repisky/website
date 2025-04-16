<?php

/**
 * signup class
 */
class Signup {

    use Controller;

    public function index($a='', $b='', $c='') 
    {
        
        
        $this->view('signup');
    }

}
