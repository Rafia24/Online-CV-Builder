

<?php

$name1 =$_POST['name1'];

$name2 =$_POST['name2'];

$name3 =$_POST['name3'];

$name4 =$_POST['name4'];

$name5 =$_POST['name5'];

$name6 =$_POST['name6'];

$name7 =$_POST['name7'];

$name8 =$_POST['name8'];

$name9 =$_POST['name9'];

$name10 =$_POST['name10'];

$name11 =$_POST['name11'];

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
	$stmt =$conn->prepare("insert into personal_info(surname,
		firstname,
		date_of_birth,
		nationality,
		gender,
		contact_no,
		home_language,
		other_language,
		health_status,
		martial_status,
		criminal_offence
)values(?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssisssss",$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10,$name11);
	$stmt->execute();
	
	$stmt->close();
	
	$conn->close();
	
}
?>

  