<?php

class ManagerDb 
{
    protected function dbConnect()
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=biblio;charset=utf8", "sudo", "boby06");
        return $db;

    }
    catch(Exception $e)
    {
        die("Erreur: " . $e->getMessage());
    }
}
}