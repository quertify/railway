<?php
   $t=$_POST['c'];
   $u=$_POST['d'];
   mysql_connect("localhost","root","");
   
   mysql_select_db("irctc");
   $query="UPDATE train SET seats='$u' WHERE trainnumber='$t'";
   mysql_query($query);
   echo("here we go!!");
   ?>