<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body style="background-image: url('IMG/hos.jpg'); background-repeat: no-repeat;
  background-size: cover;">

<h2><center><font face="Time New Romans" size="14"><b><h1><u><i>Hospital Details</i></u></h1></b></font></center></h2>

<table border="2" align="center" width="85%" height="150px" bgcolor="#87CEEB">
  <tr>
    
    <td><font face="Time New Romans" size="6"><center><b>Hospital Name</b></center></font></td>
    <td><font face="Time New Romans" size="6"><center><b>Total Oxyzen Stock(..%)</b></center></font></td>
    <td><font face="Time New Romans" size="6"><center><b>Beds For Covid patients</b></center></font> </td>
    <td><font face="Time New Romans" size="6"><center><b>Total ICU Beds</b></center></font></td>
    <td><font face="Time New Romans" size="6"><center><b>Emergency Contact</b></center></font></td>
  </tr>

<?php

include "br_show.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from br_hos"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['hospital_name']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['oxyzen_level']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['bed_covid']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['icu_covid']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['contact']; ?></b></font></center></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</body>
</html>
