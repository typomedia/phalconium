<?php

class DocsController extends ControllerBase
{

    public function indexAction()
    {
      $this->tag->prependTitle("Documentation");
    }

}

