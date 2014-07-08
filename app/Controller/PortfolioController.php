<?php

class PortfolioController extends AppController{

    public function index($sort = ''){
        $this->layout = 'portfolio';
        $page_title = 'Портфолио';
        $this->set('page_title', $page_title);
        $this->set('all', $sort);

    }
    public function single($work){
        $this->layout = 'single';
        $page_title = $work;
        $single_work = 'single_work';

        $this->set('work', $work);
        $this->set('page_title', $page_title);
        $this->set('single_work', $single_work);
    }

}