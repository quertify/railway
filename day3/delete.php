<?php


$a=$_POST['t'];
$b=$_POST['v'];

if($a==""||$b=="")
{
	echo "fill all the fields";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("india");
	$query="SELECT * FROM student1 where name='$a' AND password='$b'";
	$result=mysql_query($query);
	$count=mysql_fetch_array($result);
	if($count!=0)
	{
		$query1="DELETE FROM student1 WHERE name='$a' and password='$b'";
		mysql_query($query1);
		echo "done!!!";
		
	}
	else
	{
		echo "not deleted any error";
	}
}


















?>