<?php
	$u=$_POST['a'];
	$v=$_POST['b'];
	$w=$_POST['c'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="INSERT INTO netcamp(name,email,password) VALUES('$u','$v','$w')";
	mysql_query($query);
	echo "values inserted sucessfull!!";
	?>