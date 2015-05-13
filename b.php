<?php
	$time=$_GET['time'];												//taking time value from form
	$con=mysqli_connect("localhost","root","");                         //connection to localhost created
	$db=mysqli_select_db($con,"sachin");									//database with name 'sachin' already created and hence selected
	$q="select serno,subtitle from iron where time like '%$time%'";		//A table name 'iron' with fields 'serno','time','subtitle' alredy created
	$r=mysqli_query($con,$q);											//executing above query
	while($r1=mysqli_fetch_row($r)){									//retrieving values in the form of numeric array
		echo $r1[0]."   ".$r1[1]."<br><br>";
	}
?>