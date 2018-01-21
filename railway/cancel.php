<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>RAILWAY</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\bootstrap-theme.css">
<link rel="stylesheet" href="css\bootstrap-theme.min.css">
<style>
body{	
    background-image: url("train3.jpg");
	  background-repeat: no-repeat;
	  background-size:100%;

}
h1{
font-size: 50px;
}</style>
</head>
<body id ="registerpage" data-offset="60">


<header class="container">
 <center> <h1>Book My Train</h1></center>
</header>



<div class="container">
  <form class="form-horizontal" method="POST" action="cancel.php">
  <div class="form-group">
   <label class="control-label col-sm-2" for="seats">Seats:</label>
   <div class="col-sm-8">
	<input type="number" class="form-control" id="seats" placeholder="Enter seats" name="seats">
   </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pnr">PNR:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" id="PNR" placeholder="Enter PNR" name="PNR">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tnumber">Train-Number:</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" id="tnumber" placeholder="Enter trainnumber" name="tnumber">
      </div>
    </div>
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <input type="submit" class="btn btn-danger btn-lg" value="Cancel"></button>
		<a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
      </div>
    </div>
  </form>
</div>
<?php


$x=$_POST['seats'];
$y=$_POST['PNR'];
$z=$_POST['tnumber'];
if($x==""||$y==""||$z=="")
{
	echo "<center><p style='font-color:red'>**PLEASE fill all the fields**<p></center>";
} 
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	$q="Select * from booking where pnr='$y' and tnumber='$z'";
	$r=mysql_query($q);
	$count=mysql_fetch_array($r);
	if($count!=0)
	{
	$query1="DELETE FROM booking  WHERE   pnr='$x' and tnumber='$z'";
    $result2=mysql_query($query1);
	
	$q1="SELECT * FROM trains WHERE tno='$z'";//try * or all
    $r1=mysql_query($q1);
    $val=mysql_fetch_array($r);//getting error here
    $final=$val[4];
	$query2="UPDATE trains SET seat='$final'+'$e' WHERE tno='$f'";
    mysql_query($query2);
	echo "cancellation done";
	}
		else{
			echo "no such cancellation";
		}
}



?>



<script src="js\bootstrap.js"></script>

</body>
</html> 
	
	