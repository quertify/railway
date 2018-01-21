<?php
session_start();
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pwd'];
$d=$_POST['phn'];
$e=$_POST['cpwd'];
if($a==""||$b==""||$c==""||$d=="")
{
	echo "<p><marquee>fill all the fields</marquee></p>";
	include 'register.html';
	
	
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	   $query1 ="Select * FROM passanger WHERE email='$b'" ;
        $result =mysql_query($query1);
        $count=mysql_fetch_array($result);
	if($count==0)
	{
	$query="INSERT INTO passanger(name,email,password,phone) VALUES('$a','$b','$c','$d')";
	mysql_query($query);
	echo "YOU HAVE REGISTERED SUCESSFULLY";
	header("Location: sucessfull.html");
	}
	else if($e!=$c)
	{
		echo"<center><p style='color:red'> **password invalid** </p></center> ";
		include 'register.html';
	}
	else{
		echo"<center><p style='color:red'> **USER ALREADY EXISTS** </p></center> ";
		include 'register.html';
	}
	
}
















?>