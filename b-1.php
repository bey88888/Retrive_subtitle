<?php
	$sub=$_GET['sub'];
	$con=mysqli_connect("localhost","root","");							//Conneciton created
	$db=mysqli_select_db($con,"sachin");									// database name 'sachin' already created and hence selected 'sachin' database
	$q="select serno,time from iron where subtitle like '%$sub%'";
	$r=mysqli_query($con,$q);											//executing above query
	while($r1=mysqli_fetch_row($r)){									//retreiving values in numeric array form
		echo $r1[0]."   ".$r1[1]."<br><br>";
	}
?>