<?php

class ContactsController extends AppController{

    public function index(){
        $this->layout = 'index';
        $page_title = 'Наши контакты';
        $this->set('page_title', $page_title);

    }

}