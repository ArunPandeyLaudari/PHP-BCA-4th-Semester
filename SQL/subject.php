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
// Query to create subjects table
$sql = "CREATE TABLE subjects (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200),
    marks INT(11),
    full_marks INT(11)
)";

// Execute query for table creation
$result = $conn->query($sql);

// Query to create marks table
$qry = "CREATE TABLE marks (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    std_id INT(11),
    sub_id INT(11),
    marks_obtained INT(11)
)";


// Execute query for marks table creation
$result1 = $conn->query($qry);


if ($result1 === true && $result === true)
{
    echo "table created successfully";
}




$conn->close();
