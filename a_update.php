<?php
$username=$_POST['username'];
$pass=$_POST['password'];
$lname=$_POST['lastname'];
$fname=$_POST['firstname'];
$nick=$_POST['nickname'];
$sch=$_POST['school'];
$year=$_POST['age'];
$mail=$_POST['email'];
$clas=$_POST['class1'];


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("login_db", $con);
mysql_query("UPDATE members set last_name='$lname',first_name='$fname',nick_name='$nick',school='$sch',age='$year',email='$mail' WHERE username='$username' AND password='$pass'") or die(mysql_error());
mysql_close($con);


if (!$con)
  {
  die('δεν έγινε η εγγραφή ξαναπροσπαθήστε: ' . mysql_error());
  }
else{
	setcookie("Cookie1",$_POST['username']); 
	setcookie("Cookie2",$_POST['password']);
	setcookie("Cookie3",$_POST['lastname']);
	setcookie("Cookie4",$_POST['firstname']);
	setcookie("Cookie5",$_POST['nickname']);
	setcookie("Cookie6",$_POST['school']);
	setcookie("Cookie7",$_POST['age']);
	setcookie("Cookie8",$_POST['email']);
	setcookie("Cookie9",$_POST['class1']);
	
	header("Location:http://localhost/a_class.php");}


?> 

