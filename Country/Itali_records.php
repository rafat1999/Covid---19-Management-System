<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body style="background-image: url(/Project/IMG/pic14.jpg); background-repeat:no-repeat; background-size: cover;">

<h2><center><font face="Time New Romans" size="14">Country Details</font></center></h2>

<table border="2" align="center" bgcolor="white">
  <tr>
    <td>Country Name</td>
    <td>Effected People</td>
    <td>No of cured people</td>
    <td>Total Numbers of Death</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from  itali"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Country_Name']; ?></td>
    <td><?php echo $data['Effected_People']; ?></td>
    <td><?php echo $data['No_of_cured_people']; ?></td>
    <td><?php echo $data['Total_Numbers_of_Death']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
