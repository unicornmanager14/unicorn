<?php

class PortfolioController extends AppController{

    public $uses = array('portfolio');

    public function index($sort = ''){

        $all_works = $this->portfolio->find('all');
        $page_title = 'Портфолио';

        $data = array(
            'all_work' => $all_works,
            'page_title' => $page_title,
            'all' => $sort
        );

        $this->layout = 'index';

        $this->set($data);

    }
    public function single($work){
        $this->layout = 'index';
        $page_title = $work;

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