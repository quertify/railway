
<?php
session_start();
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pwd'];
$d=$_POST['phn'];
$e=$_POST['seat'];
$f=$_POST['tnumber'];
if($a==""||$b==""||$c==""||$d==""||$e==""||$f=="")
{
	echo "<p><marquee>fill all the fields</marquee></p>";
	include 'book.html';
	
	
}
else
{	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	  $query1 ="Select * FROM passanger WHERE email='$b'" ;
        $result =mysql_query($query1);
     $count=mysql_fetch_array($result);
	if($count>0)
	{
	$q="SELECT * FROM trains WHERE tno='$f'";//try * or all
    $r=mysql_query($q);
    $val=mysql_fetch_array($r);//getting error here
    $final=$val[4];
	$query2="UPDATE trains SET seat='$final'-'$e' WHERE tno='$f'";
    mysql_query($query2);
	
	$query11="INSERT INTO booking(name,email,password,phone,seats,tnumber) VALUES('$a','$b','$c','$d','$e','$f')";
	mysql_query($query11);
	
	echo "<p><B>Booking is confirmed.Thanks for Booking!!</B></p>";
	include'tablev.php';
	
	
	
	$_SESSION['name'] = $b;
    $_SESSION['password'] = $c;
	
	
	
	}
	else{
		echo "user doesnt exists";
		include'book.html';
		
	}
	
	
	
}?>