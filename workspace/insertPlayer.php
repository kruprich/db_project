<?php
$db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");

$id=$_POST['id'];

$firstName=$_POST['firstName'];

$lastName=$_POST['lastName'];

$inGameName=$_POST['inGameName'];

$photoURL=$_POST['photoURL'];

$hometown=$_POST['hometown'];

$region=$_POST['region'];




$query = "INSERT INTO Players(id, firstName, lastName, inGameName, photoURL, hometown, region)
VALUES
 ($id, '$firstName', '$lastName', '$inGameName', '$photoURL', '$hometown', '$region');";
$result = pg_query($query); 


?>