<?php

class FoundationController extends ControllerBase
{

    public function indexAction()
    {
      $this->tag->prependTitle("Foundation &ndash; ");
    }

}

