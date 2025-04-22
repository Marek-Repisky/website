<?php

/**
 * settings class
 */
class Settings {

    use Controller;

    public function index() 
    {
        $this->view('settings');
    }

}
