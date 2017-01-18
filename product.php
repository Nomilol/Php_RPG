<?php

class Product {
  private $_id;
  private $_name;
  private $_price;

  public function __construct() {
    $this->setId($id);
    $this->setName($name);
    $this->setPrice($price);
  }

  public function getId() {
    return $this->_id;
  }
  public function setId($id) {
    $this->_id = $id;
  }
  public function getName() {
    return $this->_name;
  }
  public function setName($name) {
    $this->_name = $name;
  }
  public function getPrice() {
    return $this->_price;
  }
  public function setPrice($price) {
    $this->_price = $price;
  }
}
