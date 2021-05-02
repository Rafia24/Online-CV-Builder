<?php


$name22 =$_POST['name22'];

$name23 =$_POST['name23'];

$name24 =$_POST['name24'];



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
	$stmt =$conn->prepare("insert into work (Full_or_Parttime,workplace,work_duration
)values(?,?,?)");
	$stmt->bind_param("sss",$name22,$name23,$name24);
	$stmt->execute();
	
	$stmt->close();
	$conn->close();
}
?>

  