<?php
$servername="localhost";
$username="root";
$password="";
$database="miniproject";

try{
$conn = new PDO("mysqli:host=$servername", $username, $password,$database);  //Sql Injection Protected Connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(!$conn)
	{
		die("connection error".mysqli_connect_error());
	}
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>
