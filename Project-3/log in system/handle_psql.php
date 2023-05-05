<?php



//this file holds the login info for postgres sql
// Connect to the database
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "jinjin";
$db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);//ignore the errors it works fine