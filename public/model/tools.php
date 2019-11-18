<?php

function dbConnect(){
    $dotenv = Dotenv\Dotenv::create(dirname(dirname(__DIR__)));
    $dotenv->load();
    $host = getenv('HOST');
    $username = getenv('USER');
    $dbname = getenv('DBNAME');
    try{
           return $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $exception)
    {
        die( 'Erreur : ' . $exception->getMessage() );
    }
}
