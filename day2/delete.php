<?php
   $p=$_POST['t'];
   
   mysql_connect("localhost","root","");
   
   mysql_select_db("irctc");
   $query="DELETE FROM train WHERE trainnumber='$p'";
   mysql_query($query);
   echo("done!!");
   ?>
   