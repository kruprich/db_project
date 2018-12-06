<?php
$db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");

$id=$_POST['id'];

$gId=$_POST['gId'];

$leagueName=$_POST['leagueName'];

$logoURL=$_POST['logoURL'];

echo $id;
echo $gId;
echo $leagueName;
echo $logoURL;
$query = "INSERT INTO Leagues(id, gId, leagueName, logoURL)
VALUES
 ($id, '$gId', '$leagueName', '$logoURL');";
$result = pg_query($query); 


?>