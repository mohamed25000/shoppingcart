<?php /** @noinspection SpellCheckingInspection */

require_once "Product.php";
require_once  "Cart.php";
require_once  "CartItem.php";

$product1 = new Product(1, "iphone11", 2500, 10);
$product2 = new Product(2, "M2SSD", 400, 10);
$product3 = new Product(3, "GalaxyS20", 3200, 10);

$cart = new Cart();

$cartitem1 = $cart->addProduct($product1, 1);
$cartitem2 = $product2->addToCart($cart, 1);

echo "number of items in cart is " . $cart->getTotalQuantity().PHP_EOL;
echo "total price in the cart is ".$cart->getTotalSum().PHP_EOL;

$cartitem2->increaseQuantity();
$cartitem2->increaseQuantity();

echo "number of items in cart is " . $cart->getTotalQuantity().PHP_EOL;
echo "total price in the cart is ".$cart->getTotalSum().PHP_EOL;

// var_dump($cart->getItems());

$cartitem2->decreaseQuantity();
echo "number of items in cart is " . $cart->getTotalQuantity().PHP_EOL;
echo "total price in the cart is ".$cart->getTotalSum().PHP_EOL;

$cart->removeProduct($product1);
echo "number of items in cart is " . $cart->getTotalQuantity().PHP_EOL;
echo "total price in the cart is ".$cart->getTotalSum().PHP_EOL;

//var_dump($cart->getItems());

