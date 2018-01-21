<?php
	$a=$_POST['t'];
	$b=$_POST['v'];
	$c=$_POST['u'];
	
	
	
	if ($a==""||$b==""||$c=="")		
	{
		echo "error fill all fields";
	}
	else 
	{
		
		 mysql_connect("localhost","root","");
         mysql_select_db("india");
		 $query="SELECT * FROM student1 WHERE name='$a' AND password='$b'";
		 $result=mysql_query($query);
		 $count=mysql_fetch_array($result);
		 
		 if($count==0)
		 {
			 echo "name and password donot match";
			 
		 }
		 else
		 {
			 $query1="UPDATE student1 set password='$c'where password='$b'";
			 mysql_query($query1);
			 echo "password updated";
			 
		 }
	
	}



?>

