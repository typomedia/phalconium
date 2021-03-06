<?php

class IndexController extends ControllerBase
{

    public function indexAction() {
      
    $this->tag->prependTitle("Welcome");
          
    $title = Option::findFirstByName("title");
    $this->view->setVar("title", $title->getValue());
    
    $claim = Option::findFirstByName("claim");
    $this->view->setVar("claim", $claim->getValue());

    $controller = $this->dispatcher->getControllerName();
    $post = Posts::findFirst("controller = '$controller'");
    $this->view->setVar("content", $post);

    // CSS in the header
    $this->assets
            ->collection('header')
            ->addCss('css/foundation/foundation.css')
            ->addCss('css/foundation/foundation-icons.css')
            ->addCss('css/typography.css')
            ->addCss('css/phalconium.css');

    // JS in the footer
    $this->assets
            ->collection('footer')
            ->addJs('js/foundation/vendor/jquery.js')
            ->addJs('js/foundation/foundation.min.js');
  }

}

