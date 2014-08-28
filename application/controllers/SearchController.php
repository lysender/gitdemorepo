<?php

class SearchController extends Zend_Controller_Action {

    protected $isCool = false;

    public function init()
    {
        parent::init();
        $this->isCool = true;        
    }

    public function indexAction()
    {
        $this->view->title = "This is the title";
        $this->view->description = "This is the description";
        $this->view->isCool = $this->isCool;
    }
}
