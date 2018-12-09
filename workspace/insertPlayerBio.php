<?php
$db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");

$playerId=$_POST['playerId'];

$languageCode=$_POST['languageCode'];

$bio=$_POST['bio'];




$query = "INSERT INTO PlayerBios(playerId, languageCode, bio)
VALUES
 ($playerId, '$languageCode', '$bio');";
$result = pg_query($query); 


?>