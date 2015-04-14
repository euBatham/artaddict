<?php

class Shipping extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Shipping';
        $this->view->background = 'bg7.jpg';
        $this->view->artists = $this->model->aristList();
        
        $this->view->render('header');
        $this->view->render('blocks/logo');
        $this->view->render('blocks/nav');
        $this->view->render('shipping/index');
        $this->view->render('footer');
    }
}