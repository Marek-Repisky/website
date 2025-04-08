<?php

class Home extends Controller {

    public function index($a='', $b='', $c='') {
        $model = new Model;
        // $arr['id'] = 1;
        $arr['name'] = "John";
        $arr['age'] = "45";

        $result = $model->insert($arr);
        
        show($result);
        $this->view('home');
    }

}
