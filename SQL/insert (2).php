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
//qeury to insert data
$sql = "INSERT INTO student (name, email, phone, address,parents_contact) values('Nabin Poudel','nabinpoudel2061@gmail.com','9866278392','Gaindakot-03','1234567')";

//execute query
$result = $conn->query($sql);

if ($result === true)
{
    echo "Data inserted successfully";
}
else
{
    echo "Error inserting data";
}