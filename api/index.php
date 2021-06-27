<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__) . '/../vendor/autoload.php';

require_once dirname(__FILE__) . '/routes/users.php';
require_once dirname(__FILE__) . '/routes/products.php';
require_once dirname(__FILE__) . '/routes/orders.php';
require_once dirname(__FILE__) . '/routes/cart.php';
require_once dirname(__FILE__) . '/routes/faq.php';





require_once dirname(__FILE__) . '/services/UserService.class.php';
require_once dirname(__FILE__) . '/services/OrderService.class.php';
require_once dirname(__FILE__) . '/services/ProductService.class.php';
require_once dirname(__FILE__) . '/services/CartService.class.php';
require_once dirname(__FILE__) . '/services/FaqService.class.php';





Flight::register('userService', 'UserService');
Flight::register('productService', 'ProductService');
Flight::register('orderService', 'OrderService');
Flight::register('cartService', 'CartService');
Flight::register('faqService', 'FaqService');





Flight::set('flight.log_errors', true);

//Error handling for API
/*
Flight::map('error', function(Exception $ex){
Flight::json(["message"=>$ex->getMessage()], $ex->getCode() ? $ex->getCode() : 500);
});*/

/* utility function for reading query parameters from URL */
Flight::map('query', function ($name, $default_value = null) {
    $request = Flight::request();
    $query_param = @$request->query->getData()[$name];
    $query_param = $query_param ? $query_param : $default_value;
    return $query_param;
});



Flight::start();
