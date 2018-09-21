<?php
use app\models\Product;

include __DIR__ . "/vendor/autoload.php";

$prod = new Product();
echo $prod->getTableName();

