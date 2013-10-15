<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
       
    </head>
    <table border="1"cellpadding="12" bgcolor="gray">
        <tr>
    <td><img src="logo.jpg" width="200" height="102"> </td><td><div align="justify"> <font size="6"><b><b>  NATIONAL  INSTITUTE  OF  TECHNOLOGY , TIRUCHIRAPPALLI - 650015    </b></b></font></div></td>
    </table><br>
     <body bgcolor="silver">
    <form name="input" action="checkstatus.php" method="post">
             <div style="color:black" align="center"bgcolor="#CCDFED">
                 <table>
                     <tr></tr>
                     <tr></tr>
                     <tr></tr><br><br><br>
                     <tr><td> <b> Booking date:</b></td><td><input  id="dt" type="date" name="dat" size="25"></td></tr>
                                     <tr><td> <label for="halls"><b>Common Halls</b></label></td><td align="left"><select name="halls" id="halls"><option>Choose one...</option><option value="A2">A-2</option><option value="A11">A-11</option><option value="A12">A-12</option><option value="A13">A-13</option><option value="EEE">EEE Auditorium</option><option value="Barn">Barn</option> </select></td></tr>
                                     <tr></tr>
                                      <tr></tr>
                                     <tr><td></td><td><b><input type="submit" title="click here to check status"value="Get Status"></b></td><td></td></tr>
                 </table>
             </div>
        <br>
            <div style="color:red" align="center"bgcolor="#CCDFED">

                <a href="home.php" title="back to home"><b>HOME</b> </a>

            </div>
    </form>
        
     </body>
</html>