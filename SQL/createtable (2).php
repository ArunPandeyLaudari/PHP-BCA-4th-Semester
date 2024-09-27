<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lict";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create the 'student' table
$qry_student = "CREATE TABLE student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(50),
    address VARCHAR(100)
)";

// Run query to create 'student' table
if ($conn->query($qry_student) === TRUE) {
    echo "Student table created successfully<br>";
} else {
    echo "Error creating student table: " . $conn->error . "<br>";
}

// SQL to create the 'subjects' table
$qry_subjects = "CREATE TABLE subjects(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    marks INT(11),
    full_marks INT(11)
)";

// Run query to create 'subjects' table
if ($conn->query($qry_subjects) === TRUE) {
    echo "Subjects table created successfully<br>";
} else {
    echo "Error creating subjects table: " . $conn->error . "<br>";
}

// SQL to create the 'marks' table with foreign keys referencing 'student' and 'subjects' tables
$qry_marks = "CREATE TABLE marks(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    std_id INT(6) UNSIGNED,
    sub_id INT(11),
    marks_obtained INT(11),
    FOREIGN KEY (std_id) REFERENCES student(id) ON DELETE CASCADE,
    FOREIGN KEY (sub_id) REFERENCES subjects(id) ON DELETE CASCADE
)";

// Run query to create 'marks' table
if ($conn->query($qry_marks) === TRUE) {
    echo "Marks table created successfully<br>";
} else {
    echo "Error creating marks table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
