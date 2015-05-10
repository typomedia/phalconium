<?php

class IndexController extends ControllerBase
{

    public function indexAction() {
          
    $title = Option::findFirstByName("title");
    $this->view->setVar("title", $title->getValue());
    
    $claim = Option::findFirstByName("claim");
    $this->view->setVar("claim", $claim->getValue());
  }

}

