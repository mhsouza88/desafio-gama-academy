<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jobsnet";
$port = 3306;

// $conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);

// Conexão sem porta
$conn = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
