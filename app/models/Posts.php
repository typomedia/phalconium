<?php

class Posts extends \Phalcon\Mvc\Model {

  /**
   *
   * @var integer
   */
  public $id;

  /**
   *
   * @var string
   */
  public $name;

  /**
   *
   * @var string
   */
  public $post;
  
  /**
   *
   * @var string
   */
  public $controller;

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getPost() {
    return $this->post;
  }

}
