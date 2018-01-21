<?php
session_start();
$a=$_POST['email'];
$b=$_POST['pwd'];
if($a==""||$b=="")
{
	echo "fill all the fields";
	include 'enter.html';
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	$query="SELECT * FROM passanger WHERE email='$a' AND password='$b'";
	$result=mysql_query($query);
	$con=mysql_fetch_array($result);
	if ($con!=0)	{
		$_SESSION['email']=$a;
		header("location:welcomepage.php");
		
	}
	else
	{
		echo "check password";
		
	}
}
















?>