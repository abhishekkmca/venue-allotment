<?php

     session_start();

     mysqli_connect("localhost","root","");
     /*if (mysqli_connect_errno($con))
         {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }*/
mysql_select_db("nitt");

         $ID='ID';
         $pass='pass';
         $result = mysql_query("SELECT * FROM log_in");
        //$info = mysql_fetch_array( $result );
        $row = mysql_fetch_array($result);
   echo 'password is' . $row[$pass].'<br/>'.'id'.$row[$ID];
  //echo "<br />";



 


?>
