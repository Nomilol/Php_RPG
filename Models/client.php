<?php
require_once 'user.php';
require_once 'product.php';
require_once '../Data/products.php';

class Client extends User {
	private $_billAmount;
	private $_cart = [];

	public function getBillAmount() {
    return $this->_billAmount;
  }
  public function setBillAmount($billAmount) {
    $this->_billAmount = $billAmount;
  }
  public function getCart() {
    return $this->_cart;
  }
  public function setCart($cart) {
    $this->_cart = $cart;
  }
  public function addProductToCart($product) {
    array_push($this->$_cart, $product);
  }
	public function buy($product){
		$this->addProductToCart($product);
		$this->getBillAmount($billAmount);

	}
}
