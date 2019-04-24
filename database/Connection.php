<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

class Connection
{
    public static function make($config)
    {
        try {
           
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
