<?php 

$host = "ec2-54-235-242-63.compute-1.amazonaws.com";
$dbname = "da1q0ce15evmg7";
$port = "5432";
$username = "drimiljykoeytx";
$password = "3ed0da850d203469b13f2477372dde01a64d11afd1d1a3fccf00285675023cc9";

$db_connection = pg_connect("host=$host dbname=$dbname port=$port user=$username password=$password");

if(!$db_connection)
{
	print("Could Not Connect to the Database. Try again later.");
}
else
{
	print("Connected to DB Successfully");
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$query = "INSERT INTO parent_details (email, name, contact) values ('$email','$name','$contact')";
print($query);


?>