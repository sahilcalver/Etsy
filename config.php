<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "etsy";
$base_url = "http://localhost:3000"; // Change if needed

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
