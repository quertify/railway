<?php
   $p=$_POST['a'];
   
   mysql_connect("localhost","root","");
   
   mysql_select_db("amazon");
   $query="DELETE FROM dukan WHERE kapra='$p'";
   mysql_query($query);
   echo("done!!");
   ?>
   