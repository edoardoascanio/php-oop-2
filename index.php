<?php

require_once("./php-oop-2/shop.php");
require_once("./php-oop-2/client.php");

$shop = new Shop("t-shirt", "nike", 12);
$client = new Client("Paolo", "Paolo.rossi@gmail.com", 27);
$client2 = new Client("Gino", "Gino.bianchi@gmail.com", 62);
$client3 = new Client("Marco", "Marco.neri@gmail.com", 16);

