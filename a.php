<?php
	$con=mysqli_connect("localhost","root","");							// connection established
	$db=mysqli_select_db($con,"sachin");									// database 'sachin' selected
	// $a='/^.{1}$/';
	// $c='/^[0-9]{2}+:[0-9]{2}+:[0-9]{2}+,/';
	// $d='/^[\w|<|(]/';
	
	// $x=file("ironman.srt");																		
	// print_r($x);
	// $n=array(1,5,51,'gf');
	// $len=count($x);
	// for($i=0;$i<$len;$i++){											
	// 	echo $x[$i]."<br>";
	// 	if()
	// }
	// echo $x[0];
	// $ex=preg_match($a,55);
	// if($ex==true)
	// 	echo "sad";
	// else
	// 	echo "wfe";
$man = fopen("ironman.srt", "r");											//opening file in read mode
// $n=1;
while(!feof($man)){															//looping until it reach end-of-file 
$q1=fgets($man);																 		
$q2=fgets($man);
$q3=fgets($man);
$q4=fgets($man);																
$h='/[a-z]+/i';
$v=preg_match($h,$q4);															//checking for blank line
if($v==false){
	$r1="insert into iron (serno,time,subtitle) values ('$q1','$q2','$q3')";

	echo "$q1<br>$q2<br>$q3<br>";
	mysqli_query($con,$r1);
	// $n++;
}
else{
	fgets($man);
	echo "$q1<br>$q2<br>$q3<br>$q4<br>";
	$r1="insert into iron (serno,time,subtitle) values('$q1','$q2','$q3\n$q4')";
	mysqli_query($con,$r1);
	//var_dump($q4);
	// $n++;
}}

fclose($myfile);
//Their is problem in file
//index number i.e. serial number is not of one character number if we check through regular expression
//blank line showing ambigues values if we check for it's emptiness through regular expression
//all subtitles are correctly shown over this webpage but some of them are not able to insert in database
//took reference from w3schools
?>