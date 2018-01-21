<?php
	$u=$_POST['a'];
	$v=$_POST['b'];
	$w=$_POST['c'];
	$x=$_POST['d'];
	$y=$_POST['e'];
	mysql_connect("localhost","root","");
	mysql_select_db("amazon");
	$query="INSERT INTO dukan(kapra,company,color,price,size) VALUES('$u','$v','$w','$x','$y')";
	mysql_query($query);
	echo "values inserted sucessfull!!";
	








?>