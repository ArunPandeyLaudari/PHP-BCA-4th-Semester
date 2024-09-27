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

// SQL to add foreign key from `marks` to `student` (for `std_id`)
$qry_add_foreign_student = "ALTER TABLE marks
    ADD CONSTRAINT fk_student
    FOREIGN KEY (std_id) REFERENCES student(id)
    ON DELETE CASCADE";

// Run query to add foreign key to `marks` for `student`
if ($conn->query($qry_add_foreign_student) === TRUE) {
    echo "Foreign key added to marks table for student<br>";
} else {
    echo "Error adding foreign key for student: " . $conn->error . "<br>";
}

// SQL to add foreign key from `marks` to `subjects` (for `sub_id`)
$qry_add_foreign_subjects = "ALTER TABLE marks
    ADD CONSTRAINT fk_subjects
    FOREIGN KEY (sub_id) REFERENCES subjects(id)
    ON DELETE CASCADE";

// Run query to add foreign key to `marks` for `subjects`
if ($conn->query($qry_add_foreign_subjects) === TRUE) {
    echo "Foreign key added to marks table for subjects<br>";
} else {
    echo "Error adding foreign key for subjects: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
