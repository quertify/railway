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
	 background-image: url("train2.jpg");
	  background-repeat: no-repeat;
	  background-size:100%;
}
h1{
	font-size:50px;
}
tr.a
{
	font-size:20px;
	
}
</style>
</head>
<body id ="print booking content" data-offset="60">


<header class="container">
 <center><B> <h1>Book My Train</h1></B></center>
</header>



<div class="container">
  <form method="POST" action="tablev.php">
  
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="a">
        
        <th>PNR</th>
        <th>NAME</th>
		<th>Email</th>
		<th>Phone no.</th>
        <th>Seats</th>
        <th>Train no.</th>
			
      </tr>
    </thead>
	  <?php
	  
	
		$d=$_SESSION['name'];
      mysql_connect("localhost","root","");
	  	mysql_select_db("railway");
      $query="SELECT * FROM booking where name='$d'";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
		
	{
	
		echo "<tbody>";
		echo "<tr>";
		echo "<td>".$row[0]."<br>";
				echo "<td>".$row[1]."<br>";
						echo "<td>".$row[2]."<br>";
								echo "<td>".$row[3]."<br>";
										echo "<td>".$row[4]."<br>";
											echo "<td>".$row[5]."<br>";
										
		echo "</tr>";
		echo "</tbody>";
		
		
	}

	?>
    <tbody>
      <tr>
	        <td><label><?php echo $row['pnr']; ?></label></td>
			<td><label><?php echo $row['name']; ?></label></td>
			<td><label><?php echo $row['email']; ?></label></td>
			<td><label><?php echo $row['phone']; ?></label></td>
			<td><label><?php echo $row['seats']; ?></label></td>
			<td><label><?php echo $row['tnumber']; ?></label></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
         <center><p><a class="btn btn-danger btn-lg" href="cancel.php" role="button">Cancel</a>
		 <a class="btn btn-success btn-lg" href="enter.html" role="button">Back</a>
		 <a class="btn btn-default btn-lg" href="logout.php" role="button">logout</a>
        </p></center>
      </div>
    </div>
	</form>
  
</div>



<script src="js\bootstrap.js"></script>

</body>
</html>