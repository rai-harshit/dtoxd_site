<!DOCTYPE html>
<html>
	<head>
		<title>DTOXD : Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

<?php 

$host = "ec2-54-235-242-63.compute-1.amazonaws.com";
$dbname = "da1q0ce15evmg7";
$port = "5432";
$username = "drimiljykoeytx";
$password = "3ed0da850d203469b13f2477372dde01a64d11afd1d1a3fccf00285675023cc9";

$db_connection = pg_connect("host=$host dbname=$dbname port=$port user=$username password=$password");

if(!$db_connection)
{
	print("<center>Could Not Connect to the Database. Try again later.</center>");
}
// else
// {
// 	print("Connected to DB Successfully");
// }

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$query = "INSERT INTO parent_details (email, name, contact) values ('$email','$name','$contact')";
print($query);
$result = pg_query($query);

if(!$result)
{
	print("<center>Something went wrong. Please try again later.</center>");
}
else
{
	print("<center>Data submitted successfully. Thanks for your time.</center>");
}


?>

</body>
</html>