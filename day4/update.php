<?php
   $x=$_POST['a'];
   $y=$_POST['b'];
   mysql_connect("localhost","root","");
   
   mysql_select_db("amazon");
   $query="UPDATE dukan SET price='$y' WHERE kapra='$x'";
   mysql_query($query);
   echo("here we go!!");
   ?>