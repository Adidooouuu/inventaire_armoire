<?php
require_once "bootstrap.php";
require_once "src/Test.php";


$product = new Test();
$product->setName('A Foo Bar');
$entityManager->persist($product);
$entityManager->flush();

echo "result== " . $product->getName() . "\n";
