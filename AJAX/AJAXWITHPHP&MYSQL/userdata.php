<?php

$search = $_POST['name'];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "lict";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `student` WHERE `name` LIKE '%$search%'";
$result = $conn->query($sql);

$data = "";

while ($row = $result->fetch_assoc()) {
    $data .= "Name: " . $row['name'] . "<br>";
}

echo $data;
