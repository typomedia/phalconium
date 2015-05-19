<?php

class TypoController extends ControllerBase
{

    public function indexAction()
    {
      $this->tag->prependTitle("Typography &ndash; ");
    }

}

