<?php

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "ykom"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>