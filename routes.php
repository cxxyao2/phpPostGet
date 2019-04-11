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

$router->post('names','controllers/add-name.php');
$router->post('threads','controllers/update-thread.php');

