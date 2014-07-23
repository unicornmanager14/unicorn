<?php

class ServicesController extends AppController{

    public function index(){
        $this->layout = 'index';



        $data = array(
            'page_title' =>'Наши услуги'
        );
        $this->set($data);
    }

}