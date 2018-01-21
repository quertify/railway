<?php
	$v=$_POST['a'];
	mysql_connect("localhost","root","");
   
	mysql_select_db("irctc");
	$query="SELECT * FROM train WHERE trainnumber='$v'";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
		echo "<table border='2'>";
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "</tr>";
		echo "</table>";
	}
	
?>
