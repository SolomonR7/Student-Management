<?php

$a=$_REQUEST["ad"];

$servername ="localhost";
$username = "root";
$password = "";
$database = "sample";
$con=mysqli_connect($servername, $username, $password, $database); 

if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$sql="select *from studat where Ad_no='$a'";
$result=mysqli_query($con,$sql);
$f=mysqli_affected_rows($con);
if ($f>0)
{

if ($result=mysqli_query($con,$sql))
{

 while ($row=mysqli_fetch_array($result))
 {
 $d1 = $row[0];
 $d2 = $row[1];
 $d3 = $row[2];
 $d4 = $row[3];
 $d5 = $row[4];
 $d6 = $row[5];
$d7= $row[6];
 $d8 = $row[7];
 $d9 = $row[8];
$d10 = $row[9];
 $d11 = $row[10];
 $d12 = $row[11];
$d13 = $row[12];
 $d14 = $row[13];
 $d15 = $row[14];
$d16 = $row[15];
 $d17 = $row[16];
 $d18 = $row[17];
$d19 = $row[18];
 $d20 = $row[19];
 $d21 = $row[20];
$d22 = $row[21];
 $d23 = $row[22];
 $d24 = $row[23];
$d25 = $row[24];
 $d26 = $row[25];
 $d27 = $row[26];
$d28 = $row[27];
 $d29 = $row[28];
 $d30 = $row[29];
$d31 = $row[30];
 $d32 = $row[31];
 $d33 = $row[32];
$d34 = $row[33];
 $d35 = $row[34];
 $d36 = $row[35];
$d37 = $row[36];
 
echo '<table border="5" cellspacing="10" cellpadding="5" bordercolor ="blue"> 

<caption><font face="Arial" color="000080">STUDENT DETAILS FOR ADMISSION NUMBER: '.$d5.'</font> </caption>

<tr>
 <td> <font size="2" face="Arial" color="000080">Number</font> </td>
 <td>'.$d1.'</td>
 <td> <font face="Arial" color="000080">Class</font> </td>
 <td>'.$d2.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Section</font> </td>
 <td>'.$d3.'</td>
 <td> <font face="Arial" color="000080">Gender</font> </td>
 <td>'.$d4.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Admission Number</font> </td>
 <td>'.$d5.'</td>
 <td> <font face="Arial" color="000080">Name</font> </td>
 <td>'.$d6.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Day of Birth</font> </td>
 <td>'.$d7.'</td>
 <td> <font face="Arial" color="000080">Month of Birth</font> </td>
 <td>'.$d8.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Year of Birth</font> </td> 
 <td>'.$d9.'</td>
 <td> <font face="Arial" color="000080">Father Name</font> </td>
 <td>'.$d10.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Mother Name</font> </td>
 <td>'.$d11.'</td>
 <td> <font face="Arial" color="000080">Communication Number</font> </td>
 <td>'.$d12.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Father Number</font> </td>
 <td>'.$d13.'</td>
 <td> <font face="Arial" color="000080">Mother Number</font> </td>
 <td>'.$d14.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Landline</font> </td>
 <td>'.$d15.'</td>
 <td> <font face="Arial" color="000080">email</font> </td>
 <td>'.$d16.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Mother email</font> </td>
 <td>'.$d17.'</td>
 <td> <font face="Arial" color="000080">Address 1</font> </td>
 <td>'.$d18.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Address 2</font> </td>
 <td>'.$d19.'</td>
 <td> <font face="Arial" color="000080">Accademic year</font> </td>
 <td>'.$d20.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Day of Joining</font> </td> 
 <td>'.$d21.'</td>
 <td> <font face="Arial" color="000080">Month of Joining</font> </td>
 <td>'.$d22.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Year of Joining</font> </td>
 <td>'.$d23.'</td>
 <td> <font face="Arial" color="000080">Joining Class</font> </td>
 <td>'.$d24.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Medium of Education</font> </td>
 <td>'.$d25.'</td>
 <td> <font face="Arial" color="000080">House</font> </td>
 <td>'.$d26.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Religion</font> </td>
 <td>'.$d27.'</td>
 <td> <font face="Arial" color="000080">Nationality</font> </td>
 <td>'.$d28.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Community</font> </td>
 <td>'.$d29.'</td>
 <td> <font face="Arial" color="000080">Caste</font> </td>
 <td>'.$d30.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Sub-caste</font> </td>
 <td>'.$d31.'</td>
 <td> <font face="Arial" color="000080">Mother Tongue</font> </td>
 <td>'.$d32.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Father Occupation</font> </td>
 <td>'.$d33.'</td>
 <td> <font face="Arial" color="000080">Previuos School</font> </td>
 <td>'.$d34.'</td></tr>
<tr>
 <td> <font face="Arial" color="000080">Mother Occupation</font> </td>
 <td>'.$d35.'</td>
 <td> <font face="Arial" color="000080">Student Category</font> </td>
 <td>'.$d36.'</td></tr>
<tr>
<td> <font face="Arial" color="000080">emis Number</font> </td>
 <td>'.$d37.'</td></tr>
 
</table> ';
 }
}}
else
echo "<h1> This student does not belong to this class</h1>";

mysqli_close($con);


?>