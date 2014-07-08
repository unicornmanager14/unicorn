<?php
class IndexController extends AppController{

    public function index(){
        $this->layout = 'index';
        $page_title = 'Главная страница';
        $this->set('page_title', $page_title);
    }

}