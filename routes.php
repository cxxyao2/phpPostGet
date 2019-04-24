<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/name.php'
// ]);


$router->get('','controllers/index.php');
$router->get('about','controllers/about.php');
$router->get('contact','controllers/contact.php');
$router->get('threads','controllers/getThreads.php');
$router->get('pdfdownnload','file/pdfcreate.php');



$router->post('names','controllers/add-name.php');
$router->post('threads','controllers/update-thread.php');

//orders
$router->get('api/getorder','database/getOrder.php');
$router->get('api/getorders','database/getOrders.php');
$router->post('api/insertorder','database/insertOrder.php');
$router->delete('api/deleteorder','database/deleteOrder.php');
$router->put('api/updateorder','database/updateOrder.php');

