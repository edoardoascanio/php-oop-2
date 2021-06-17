<?php

require_once("./products/smartphone.php");
require_once("./user.php");
require_once("./cart.php");
require_once("./users/primeUser.php");
require_once("./product.php");
require_once("./payment.php");
require_once("./payments/creditCard.php");


$user = new PrimeUser("Paolo", "Paolo.rossi@gmail.com");
$cart = new Cart($user);

$iphone12 = new SmartphoneProduct("Iphone", 1, 980, "12 Pro", "Apple");


$cart->addProduct($iphone12);

var_dump($cart);