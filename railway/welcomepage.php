
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
	 background-image: url("train.jpg");
	  background-repeat: no-repeat;
	  background-size:100%;
}
h1{
	font-size: 40px;
}
</style>
</head>
<body id ="loginpage" data-offset="60">


<header class="container">
 <center> <B><h1>Book My Train</h1></B></center>
</header>



<div class="container">
  
    <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        
        <th>Train-name</th>
        <th>Train-number</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Seats</th>
      </tr>
    </thead>
	  <?php
	  
      mysql_connect("localhost","root","");
	  	mysql_select_db("railway");
		
		
      $query="SELECT * FROM trains  ";
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
		echo "</tr>";
		echo "</tbody>";
		
		
	}
	?>
    <tbody>
      <tr>
	  <td><label><?php echo $row['tnumber']; ?></label></td>
			<td><label><?php echo $row['tname']; ?></label></td>
			<td><label><?php echo $row['source']; ?></label></td>
			<td><label><?php echo $row['destinantion']; ?></label></td>
			<td><label><?php echo $row['seat']; ?></label></td>
        
      </tr>
    </tbody>
  </table>
  </div>
</div>
 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
         <center><p><a class="btn btn-primary btn-lg" href="Book.html" role="button">Book Now</a></p></center>
        
      </div>
    </div>
 
</div>


<script src="js\bootstrap.js"></script>

</body>
</html> 
