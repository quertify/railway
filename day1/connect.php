<?php
	$x=$_POST['a'];
	$y=$_POST['b'];
	$z=$_POST['c'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("netcamp");
	$query="INSERT INTO student(name,email,password) VALUES('$x','$y','$z')";
	mysql_query($query);
	echo("ho gaya!!")


?>