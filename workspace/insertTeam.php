<?php
$db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");

$id=$_POST['id'];

$teamName=$_POST['teamName'];

$photoURL=$_POST['photoURL'];

$logoURL=$_POST['logoURL'];

$acronym=$_POST['acronym'];

$altLogoURL=$_POST['altLogoURL'];

$homeLeague=$_POST['homeLeague'];


//$query = "INSERT INTO Teams(id, teamName, photoURL, logoURL, acronym, altLogoURL, homeLeague)
//VALUES
 //(12, 'Gold Team', 'adf', 'asdf', 'GT', 'asdf', 3);";

$query = "INSERT INTO Teams(id, teamName, photoURL, logoURL, acronym, altLogoURL, homeLeague)
VALUES
 ($id, '$teamName', '$photoURL', '$logoURL', '$acronym', '$altLogoURL', $homeLeague);";
$result = pg_query($query); 


?>