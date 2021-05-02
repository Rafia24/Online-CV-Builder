<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myCV";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE objective (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Objective VARCHAR(60)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table objective created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
