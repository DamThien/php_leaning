<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "fashion_mylishop";

// Create connection


$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("Create database demo");
$conn->close();
