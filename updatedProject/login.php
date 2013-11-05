<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>infornation</title>
    </head>

    <table border="1"cellpadding="12" bgcolor="gray">
        <tr>
    <td><img src="logo.jpg" width="200" height="102"> </td><td><div align="justify"> <font size="6"><b><b>  NATIONAL  INSTITUTE  OF  TECHNOLOGY , TIRUCHIRAPPALLI - 620015    </b></b></font></div></td>
    </table><br>
    <body bgcolor="silver">
    <table border="0" align="adjust" bgcolor="silver">
        <tr><td><b><b><a href="index.php">logout</a></b></b></td></tr>
    </table><br><br><br>
        <form name="input" action="checkvenue.php" method="post">
             <div style="color:black" align="center"bgcolor="#CCDFED">
                 <fieldset style="width: 700px; height: 300px;">
                      <legend style="color:red"><font size="5"><b><u>: FILL REQUISITION :</u></b></font></legend>
                              <table>
                                     <tr>
                                         <td> <b> Faculty/Staff Advisor Name </b></td><td><input type="text" name="name" size="25"></td>
                                     </tr>
                                     <tr><td> <b>Department</b></td><td><input type="text" name="dept" size="25"></td></tr>
                                     <tr><td> <b> Event name</b></td><td><input type="text" name="event" size="25"></td></tr>
                                     <tr><td> <b> Email Id </b></td><td><input type="text" name="email" size="25"></td></tr>
                                     <tr><td> <b> Mobile no.:</b></td><td><input type="text" name="mobile" size="25"></td></tr>
                                     <tr><td> <b> Booking date:</b></td><td><input type="date" name="dat" size="25"></td></tr>
                                     <tr><td> <label for="halls"><b>Common Halls</b></label></td><td align="left"><select name="halls" id="halls"><option>Choose one...</option><option value="A2">A-2</option><option value="A11">A-11</option><option value="A12">A-12</option><option value="A13">A-13</option><option value="EEE">EEE Auditorium</option><option value="Barn">Barn</option> </select></td></tr>
                                     <tr></tr>
                                     <tr><td></td><td><b><input type="submit" value="Submit"></b></td><td></td></tr>
                              </table>
                  </fieldset>
             </div>
       </form>
    </body>
</html>

