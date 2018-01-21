<?php
$p=$_POST['t'];
$q=$_POST['u'];
$r=$_POST['v'];
$s=$_POST['x'];
 if($p==""||$q==""||$r==""||$s=="")
  echo "fill all the feilds";
 
 else
 
 {    
	   mysql_connect("localhost","root","");
   
       mysql_select_db("india");
	    $query ="Select * FROM student1 WHERE name='$p'";
        $result =mysql_query($query);
        $count=mysql_fetch_array($result);
 
   if($count==0)
   {
	    $query1="INSERT INTO student1 (name,email,password,phone) VALUES('$p','$q','$r','$s')";
	  mysql_query($query1);
	  echo "done!!";
   }
   else
   {
	   echo "user exists";
   }
  
	  
 
 }

     

?>
