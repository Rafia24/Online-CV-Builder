<?php

$name12 =$_POST['name12'];

$name13 =$_POST['name13'];

$name14 =$_POST['name14'];

$name15 =$_POST['name15'];

$name16 =$_POST['name16'];

$name17 =$_POST['name17'];

$name18 =$_POST['name18'];

$name19 =$_POST['name19'];

$name20 =$_POST['name20'];

$name21 =$_POST['name21'];



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
	$stmt =$conn->prepare("insert into the_education(school_name,
		O_level_passing_year,
		O_level_result,
		college_name,
		A_level_passing_year,	
		A_level_result,
		University_name,
		Department,
		Year_of_completion,
		CGPA

)values(?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssi",$name12,$name13,$name14,$name15,$name16,$name17,$name18,$name19,$name20,$name21);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>

  