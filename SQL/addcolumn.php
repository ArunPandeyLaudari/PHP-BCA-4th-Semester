<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lict";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//add column query 
$qry = "Alter table student add column parents_contact int(11) ";
//execute query
$result = $conn->query($qry);
 if ($result === true)
{
    echo "Column added successfully";
}

//close connection
$conn->close();

