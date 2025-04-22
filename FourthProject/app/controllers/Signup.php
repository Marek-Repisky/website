<?php

/**
 * signup class
 */
class Signup {

    use Controller;

    public function index() 
    {
        $this->view('signup');
    }

}
