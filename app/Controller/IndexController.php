<?php
class IndexController extends AppController{
//sdf

    public $uses = array('slider');

    public function index(){
        $this->layout = 'index';
        $page_title = 'Главная страница';
        $this->set('page_title', $page_title);

        $slider = $this->slider->find('all');

        $data = array(
            'slider' => $slider
        );

        $this->set($data);

    }

}