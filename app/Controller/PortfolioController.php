<?php

class PortfolioController extends AppController{

    public $uses = array('portfolio');

    public function index($sort = ''){
        $this->layout = 'portfolio';
        $page_title = 'Портфолио';
        $this->set('page_title', $page_title);
        $this->set('all', $sort);

    }
    public function single($work){
        $this->layout = 'single';
        $page_title = $work;

        //$single_work = $this->portfolio->find('all');

        $single_work = $this->portfolio->find('all', array(
            'conditions' => array(
                "portfolio.id" => array($work)
            )
        ));

        $data = array(
            'work' => $work,
            'page_title' => $page_title,
            'single_work' => $single_work,
        );


        $this->set($data);

    }

}