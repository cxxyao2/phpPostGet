<?php
$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';
require 'Router.php';

return   Connection::make($config['database']);