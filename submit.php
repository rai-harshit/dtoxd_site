<?php 

$host = "";
$port = "";
$username = "";
$password = "";
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$query = "INSERT INTO parent_details (email, name, contact) values ('$email','$name','$contact')";
print($query);


?>