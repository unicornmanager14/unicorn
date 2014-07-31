<?php

class AboutController extends AppController{


    protected $_name;


    public function index(){

        $data = array(
            'page_title' => 'О нас'
        );
        $this->layout = 'index';
        $this->set($data);
    }

}