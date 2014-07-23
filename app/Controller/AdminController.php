<?php

class AdminController extends AppController{

    public $uses = array('slider');

    public function index(){

    }
    public function add(){
        if (!empty($this->data)) {
            $this->slider->create();
            $file = $this->data['Post']['post_file'][0];
            if ($file['error'] == 0) {
                if (!preg_match('/\.([A-Za-z]*)$/',$file['name'],$ext)) {
                    $ext[0] = '.bin';
                }
                $this->data['Post']['post_file'] = str_replace('.','',strval(microtime(1))).$ext[0];
                $this->data['Post']['old_file'] = $file['name'];
                $f = file_get_contents($file['tmp_name']);
                file_put_contents(IMAGES.$this->data['Post']['post_file'],$f);
                if ($this->Post->save($this->data)) {
                    $this->Session->setFlash(__('Запись создана и файл загружен', true));
                    $this->redirect(array('action'=>'index'));
                }
            }
        }


    }

}