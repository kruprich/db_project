<?php
    $db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");
    
    
    echo $result;
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LoL ESport</title>
    <script src="/scripts.js"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lol Esport</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.html">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    {% load static %}
    <img style="width:100%"src="{% static "2deb15a4a5c147aa45d325da3e623823_ed6ccc8a8fc8129726e0059ea5881678.jpeg" %}" alt="My image"> <div class="">
   
    <div class="container">    
      <div class="jumbotron">
        <div class="container">
          <h1 style="font-size: 35px">View Players</h1>
          <p>Enter in the Player Name or select View All</p>

<form method="POST" action="/searchPlayers.1.php" id="pid">
    <input type="number" name="pid" id="pid" placeholder="Player ID">
    <input type="submit" name="searchPlayers" href="/searchPlayers.1.php" value="Search" />
</form> 
    
    
    <a href="/selectAllPlayers.php"><button>View All</button></a><br><br>


<!-- START OF PHP -->
<?php
$db = pg_connect("host=localhost dbname=lolDB user=postgres password=123");

$pid=$_POST['pid'];



$query = "SELECT * FROM Players WHERE id=$pid";
$result3 = pg_query($db, $query) or die('Query failed: ' . pg_last_error());


$i = 0;
echo '<html><body><table><tr>';
while ($i < pg_num_fields($result3))
{
	$fieldName = pg_field_name($result3, $i);
	echo '<td>' . $fieldName . '</td>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result3)) 
{



	echo '<tr>';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td>' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result3);

echo '</table></body></html>';


?>
       
<!--END OF PHP -->       
        </div>
      </div>      </div>

    </div><!-- /.container -->
</div>


</body>

<!-- Style for table -->
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</html>