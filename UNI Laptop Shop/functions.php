<?php

//require MYSQl Connection
require ('database/DBController.php');

//require product class
require ('database/Product.php');

//require product class
require ('database/Cart.php');

//DBController oblect
$db = new DBController();

//product object
$product=new Product($db);
$product_shuffle=$product->getData();

//Cart object
$Cart= new Cart($db);



?>