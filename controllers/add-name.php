<?php

$userTests = $query->insert('userTest',[
    'id' => $_POST['id'],
    'name' => $_POST['name']
]);



require 'view/about.php';

//header('Location: /about');