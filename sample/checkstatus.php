
<html>
    <head>
        <title>List Students</title>
     <style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:15px;
	color:#333333;
	border-width: 5px;
	border-color: #666666;
	border-collapse: collapse;
        width: 50%;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 3px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
        text-align: center;
}
</style>
    </head>

    <body>



<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
$host="localhost";

// Host name

$username="root";

// Mysql username

$password="";

// Mysql password

$db_name="nitt";

// Database name

$tbl_name="allocation";

// Table name

$count=0;

mysql_connect("$host", "$username", "$password")or die("cannot connect");


mysql_select_db("$db_name")or die("cannot select DataBase");



// Define $myusername and $mypassword


//$myusername=$_POST['name'];
//must be variable name input_name in login.php


//$mydept=$_POST['dept'];

//$myevent=$_POST['event'];

//$myemail= $_POST['email'];

//$mymobile= $_POST['mobile'];

$mydate = $_POST['dat'];

$myvenue = $_POST['halls'];

if(empty($_POST['dat']))
                         {include 'check.php';
                           echo "<script> alert('Date connot be empty')</script>";
                            exit(0);
                         }

  if($myvenue=='Choose one...')
                         {include 'check.php';
                           echo "<script> alert('Hall field connot be empty')</script>";
                            exit(0);
                         }
//$date= new DateTime();
 // echo $date->getTimestamp();
 //         echo $date->format('m/d/20y');
  // echo $mydate;
   //echo $mydate->getTimestamp();
//$myusername = stripslashes($myusername);

//$mydept = stripslashes($mydept);

//$myevent = stripslashes($myevent);

//$myemail = stripslashes($myemail);

//$mymobile = stripslashes($mymobile);

$mydate = stripslashes($mydate);

$sql="SELECT * FROM $tbl_name WHERE (bookin_date='$mydate')";

$result=mysql_query($sql);
$count=mysql_num_rows($result);
////////////////
/*echo "<br><br><center><h1><b><u>List of Registered Students</u></b></h1><br><br></center>";
   echo "<center><table class='gridtable'>
       <tr>
           <th>Faculty</th>
           <th>department</th>
           <th>event</th>
           <th>mobile</th>
           <th>date</th>
           <th>hall</th>
       </tr>";*/
//////////////
if($count==0)

{//////////////
   // <table border='1' cellpadding='12'> <tr> <td> Event name</br> </tr></table>
   // while($row=mysql_fetch_array($result))
        
      //  echo  '$row['event']';
       // print"<center><table border='1'><tr><td colspan='30'>".$row['event']."</td><td colspan='30'>".$row['bookin_date']."</td><td colspan='30'>".$row['hall']."</td></tr></table></center>";
   //            echo "<tr>";
   /*    echo "<td>".$row['f_name']."</td>";
       echo "<td>".$row['dept']."</td>";
       echo "<td>".$row['event']."</td>";
       echo "<td>".$row['mobile']."</td>";
       echo "<td>".$row['bookin_date']."</td>";
       echo "<td colspan='30'>".'      '."</td>";
       echo "</tr>";
        }*/
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");


//session_register("mypassword");

//mysql_query("INSERT INTO allocation(f_name,dept,event,email,mobile,bookin_date,hall) VALUES ('$myusername','$mydept','$myevent','$myemail',$mymobile,'$mydate','$myvenue')");

//header("location:check.php");
include 'check.php';
echo '<font color="red" size="5"><center> VENUE IS EMPTY </center></font>';
}
/////////////
else

    {
    include 'check.php';

    echo '<font color="red" size="5"><center> VENUE ALLOTED </center></font>';



}

?>


</html>