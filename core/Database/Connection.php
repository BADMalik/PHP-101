<?php

class Connection
{
    public static function make($config)
    {
        try 
        {
            //code...
            // return new PDO('mysql:host=localhost;dbname=mytodo','root','');
            return new PDO
            (
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } 
        catch (PDOException $e) 
        {
            //throw $th;
            return $e->getMessage();
        }
    }
}