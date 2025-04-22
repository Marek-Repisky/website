<?php

/**
 * search class
 */
class Search {

    use Controller;

    public function index() 
    {
        $this->view('search');
    }

}
