<?php
ob_start();

$host="localhost";

// Host name

$username="root";

// Mysql username

$password="";

// Mysql password

$db_name="nitt";

// Database name

$tbl_name="log_in";

// Table name

$count=0;
//Connect to server and select databse.


mysql_connect("$host", "$username","$password")or die("cannot connect");


mysql_select_db("$db_name")or die("cannot select DataBase");



// Define $myusername and $mypassword


$myusername=$_POST['Username'];
//must be variable name input_name in login.php


$mypassword=$_POST['Password'];



// To protect MySQL injection (more detail about MySQL injection)


$myusername = stripslashes($myusername);

$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);

$mypassword = mysql_real_escape_string($mypassword);


$sql="SELECT * FROM $tbl_name WHERE ID='$myusername' and pass='$mypassword'";


$result=mysql_query($sql);



// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)

{
// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:login.php");



}

else
{
include 'index.php';
//if(isset($_POST['Submit']))
       //     {
             if(empty($_POST['Username']) and empty($_POST['Password']))
                 {
                   echo"<script> alert('Username and Password connot be empty')</script>";
                   exit(0);
                 }
                 if(empty($_POST['Username']))
                         {
                           echo "<script> alert('Username connot be empty')</script>";
                            exit(0);
                         }

                  if(empty($_POST['Password']))
                         {
                           echo "<script> alert('Password connot be empty')</script>";
                            exit(0);
                         }
        //}
echo '<font color="red" size="5"><center>Incorrect Username/Password</center></font>';



}


ob_end_flush();




?>
