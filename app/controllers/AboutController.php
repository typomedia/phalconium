<?php

class AboutController extends ControllerBase
{

    public function indexAction()
    {
      $this->tag->prependTitle("About");
    }

}

