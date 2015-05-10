<?php

class Option extends \Phalcon\Mvc\Model {

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
  public $value;

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getValue() {
    return $this->value;
  }

}
