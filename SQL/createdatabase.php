<?php

//create database for mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lict";

$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("CREATE database lict");

//checkk
if ($result === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
