<?php

class SkuController extends Zend_Controller_Action {

    public function indexAction()
    {
        $this->view->title = "This is the title";
        $this->view->description = "This is the description";

        $this->view->product = array(1);
    }
}
