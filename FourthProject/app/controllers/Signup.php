<?php

/**
 * signup class
 */
class Signup {

    use Controller;

    public function index() 
    {
        $user = new User();

        $this->view('signup');
    }

}
