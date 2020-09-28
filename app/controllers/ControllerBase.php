<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

    protected function initialize()
    {
     	$this->tag->setTitle('Phalconium');
     	$this->tag->setTitleSeparator(' - ');

    	$controller = $this->dispatcher->getControllerName();
    	$post = Posts::findFirst("controller = '$controller'");
    	$this->view->setVar("content", $post);
    }
  
}
