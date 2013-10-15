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


$myusername=$_POST['name'];
//must be variable name input_name in login.php


$mydept=$_POST['dept'];

$myevent=$_POST['event'];

$myemail= $_POST['email'];

$mymobile= $_POST['mobile'];

$mydate = $_POST['dat'];

$myvenue = $_POST['halls'];

$myusername = stripslashes($myusername);

$mydept = stripslashes($mydept);

$myevent = stripslashes($myevent);

$myemail = stripslashes($myemail);

$mymobile = stripslashes($mymobile);

$mydate = stripslashes($mydate);

if(empty($_POST['name']))
                         {
                           include 'login.php';
                           echo "<script> alert('Faculty connot be empty')</script>";
                            exit(0);
                         }
 if(empty($_POST['dept']))
                         {
                           include 'login.php';
                           echo "<script> alert('Department connot be empty')</script>";
                            exit(0);
                         }
  if(empty($_POST['event']))
                         {include 'login.php';
                           echo "<script> alert('Event connot be empty')</script>";
                            exit(0);
                         }
  if(empty($_POST['email']))
                         {include 'login.php';
                           echo "<script> alert('Email connot be empty')</script>";
                            exit(0);
                         }
  if(empty($_POST['mobile']))
                         {include 'login.php';
                           echo "<script> alert('Mobile no. connot be empty')</script>";
                            exit(0);
                         }
  if(empty($_POST['dat']))
                         {include 'login.php';
                           echo "<script> alert('Date connot be empty')</script>";
                            exit(0);
                         }
   if(empty($_POST['halls']))
                         {include 'login.php';
                           echo "<script> alert('Hall field connot be empty')</script>";
                            exit(0);
                         }


$sql="SELECT * FROM $tbl_name WHERE hall='$myvenue' and bookin_date='$mydate'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==0)

{
    // Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");


//session_register("mypassword");

mysql_query("INSERT INTO allocation(f_name,dept,event,email,mobile,bookin_date,hall) VALUES ('$myusername','$mydept','$myevent','$myemail',$mymobile,'$mydate','$myvenue')");

//header("location:login.php");
include 'login.php';
echo '<font color="red" size="5"><center> !!!! ALLOTED SUCCESSFULLY !!!!</center></font>';



}
else

    {
    include 'login.php';

    echo '<font color="red" size="5"><center>ALREADY ALLOTED</center></font>';



}
?>


