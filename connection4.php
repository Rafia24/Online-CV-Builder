<?php


$name25 =$_POST['name25'];

$name26 =$_POST['name26'];

$name27 =$_POST['name27'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	$stmt =$conn->prepare("insert into skill(took_part_in,achievement,hobby
)values(?,?,?)");
	$stmt->bind_param("sss",$name25,$name26,$name27);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>