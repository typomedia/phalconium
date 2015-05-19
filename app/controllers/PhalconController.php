<?php

class PhalconController extends ControllerBase
{

    public function indexAction()
    {
      $this->tag->prependTitle("Phalcon");
    }

}

