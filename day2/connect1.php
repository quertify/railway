<?php
   $x=$_POST['a'];
   $y=$_POST['b'];
   $z=$_POST['c'];
   $k=$_POST['d'];
   mysql_connect("localhost","root","");
   mysql_select_db("irctc");
   $query="INSERT INTO train(trainnumber,seats,source,destination) VALUES('$x','$y','$z','$k')";
   mysql_query($query);
   echo("Now you can proceed further , thankyou!!!")



?>