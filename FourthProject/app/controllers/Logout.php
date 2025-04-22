<?php

/**
 * home class
 */
class Logout {

    use Controller;

    public function index() 
    {
        $this->view('logout');
    }

}
