<?php

class ErrorController extends ControllerBase {

  public function show404Action() {
    $this->tag->prependTitle("Error &ndash; ");
    $this->response->setStatusCode(404, 'Not Found');
    $this->view->pick('error/404');
  }

}
