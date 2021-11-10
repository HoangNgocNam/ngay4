<?php
include_once "models/Product.php";
include_once "services/ProductManager.php";

use services\ProductManager;
use models\Product;



$productManager = new ProductManager();
$productManager->add(new Product("laptop"));
$productManager->add(new Product("mobile"));
$products = $productManager->getProducts();
foreach ($products as $product){
    echo $product->getName(). "<br/>";
}