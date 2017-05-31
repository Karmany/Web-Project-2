<?php

// Settings for connecting to the DB
$host     = 'howabout.mysql.domeneshop.no';    //Server
$database = 'howabout';       //Databasename
$username = 'howabout';         //Username for logging in
$password = 'h9QWLyHpYef6hMH';             //Password for logging in (if passwordprotected)

//Here we connect to the local database with the details from config.php
$conn = mysqli_connect($host, $username, $password, $database);
//We must set the charset to utf8, if we don't the nordic letters will not work.
$conn->set_charset('utf8');

//Simple errorhandler ***PRONE TO SQL-INJECTION, MUST CHANGE***
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}






 ?>
