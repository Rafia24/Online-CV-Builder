<!DOCTYPE html>
<html>
<head>
	<title>Page3</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Sunshiney&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully completed forming your CV.Check it out by clicking in the following link :<a href="http://localhost/phpmyadmin/">"http://localhost/phpmyadmin/"</a></p>
  <hr>
  <p class="mb-0">Have a good day!!</p>
</div>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/1.PNG" class="d-block w-100" alt="...">
    </div>
</div>
</div>



	<?php

$name28 =$_POST['name28'];



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
	$stmt =$conn->prepare("insert into objective (
Objective
)values(?)");
	$stmt->bind_param("s",$name28);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
</body>
</html>