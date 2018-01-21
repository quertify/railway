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
	mysql_select_db("student1");
	$query="SELECT * FROM student1 where name= '$a' and password='$b'";
	$result=mysql_query($query);
	$count=mysql_fetch_array($query);
	if(count==0)
	{
		echo "cant print";
		
	}
	else
	{
		$query1="SELECT * FROM student1 where name= '$a' and password='$b'";
	$result1=mysql_query($query1);
		while($row=mysql_fetch_array($result1))
			echo "<table border='2'>";
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "</tr>";
		echo "</table>";
	}
}














?>
