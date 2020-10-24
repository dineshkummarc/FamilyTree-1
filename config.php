<?php
/**
 * Created by PhpStorm.
 * User: dineshkummarc
 * Date: 10/24/2020
 * Time: 08:37 AM
 */
 
//Database file
$host = "localhost";
$username = "root";
$password = "";
$database = "family";

/*
$dsn = "mysql:host=$host;database=$database;";
try {
    $connection = new PDO($dsn, $username, $password);
}catch(Exception $e){
    echo "Uh oh speghetti-o. Error = ". $e->getMessage();
}
*/

// Create connection
$connection = new mysqli($host, $username, $password, $database) or die("Connect failed: %s\n". $connection -> error);
 return $connection;