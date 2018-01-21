<?php

session_start();
if(isset($_SESSION['name']))
{
	echo "YOU HAVE SUCCESSFULLY LOGGED IN";
	echo  $_SESSION['name'];
	echo "<a href ='logout.php'>LOGOUT</a>";
}

else
{ 
	header("location:login.php");
}
?>
