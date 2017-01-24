<?php
require 'product.php';
class Vegetable extends Product {
    private $_productorName;
    private $_expiresAt;

    public function __construct($productorName, $expiresAt) {
      $this->setProductorName($productorName);
      $this->setExpiresAt($expiresAt);
    }
    public function isFresh() {
      if ($expiresAt > 24) {
        return true;
      }else {
        return false;
      }
    }
    public function getProductorName() {
      return $this->_productorName;
    }
    public function setProductorName($productorName) {
      $this->_productorName = $productorName;
    }
    public function getExpiresAt() {
      return $this->_expiresAt;
    }
    public function setExpiresAt($expiresAt) {
      $this->_expiresAt = $expiresAt;
    }
}
