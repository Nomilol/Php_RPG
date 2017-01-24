<?php
require_once '../Models/product.php';

$product1 = new Product("1", "patate", "1.00");
$product2 = new Product("2","blette","1.50");
$product3 = new Product("3","chaussette","3.00");
$product4 = new Product("4","slip","3.00");
$product5 = new Product("5","pull","15.00");

 $myArrayProduct = [
   $product1,
   $product2,
   $product3,
   $product4,
   $product5
 ];

 return $myArrayProduct;
