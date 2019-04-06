<?php
$config = require 'config.php';


return   Connection::make($config['database']);