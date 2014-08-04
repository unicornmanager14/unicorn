<?php

class AboutController extends AppController{




    public function index(){

        $data = array(
            'page_title' => 'О нас'
        );
        $this->layout = 'index';
        $this->set($data);
    }

}