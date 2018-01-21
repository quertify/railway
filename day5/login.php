<?php
session_start();

$u=$_POST['a'];
$v=$_POST['c'];
if($u==""||$v=="")
{
	echo "fill the places";
	
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="SELECT * FROM netcamp WHERE name='$u' AND password='$v'";
	$result=mysql_query($query);
	$con=mysql_fetch_array($result);
	if($con!=0)
	{
		$_SESSION['name']=$u;
		header("location:welcome.php");
		
	}
	else
	{
		echo "mismatch!";
	}	
	
}

	?>








