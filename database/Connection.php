<?php

class Connection
{
    public static function make($config)
    {
        try {
            
           //return new PDO('mysql:host=127.0.0.1;dbname=test1', 'root', '1234');
           return new PDO(
               $config['connection'].';dbname='.$config['dbname'],
               $config['username'],
               $config['password'],
               $config['options']
           );
           
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
    }

}
