<?php

include_once "classes/BuyProducts.class.php";
include_once "classes/paymentTypes.class.php";

$buyProducts = new BuyProduct();
echo $buyProducts->getPayment();
