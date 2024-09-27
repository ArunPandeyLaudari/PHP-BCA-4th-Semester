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
$sql = "SELECT * from student";

//execute query
$result = $conn->query($sql);

if ($result -> num_rows > 0 )
{
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row['id']."<br>";        
        echo "Name: ". $row['name']."<br>";        
        echo "Phone: " . $row['phone']."<br>";        
        echo "Address: " . $row['address']."<br>";        
        echo "Email: " . $row['email']."<br>";        
        echo "Parent Contact: " . $row['parents_contact']."<br>";
        echo "<br>";        
}
}
