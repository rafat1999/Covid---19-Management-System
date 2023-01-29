<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Display Vaccine info</title>
</head>
<body>
  <table align="center" width="100%" border="3">
    <tr>
      <td><center><b>First Name</b></center></td>
      <td><center><b>Last Name</b></center></td>
      <td><center><b>Date of Birth</b></center></td>
      <td><center><b>Email</b></center></td>
      <td><center><b>Phone Number</b></center></td>
      <td><center><b>Gender</b></center></td>
      <td><center><b>Division</b></center></td>
      <td><center><b>District</b></center></td>
      <td><center><b>Vilage</b></center></td>
      <td><center><b>Zip</b></center></td>
      <td><center><b>Nationality</b></center></td>
      <td><center><b>National Id</b></center></td>
      <td><center><b>Marital Status</b></center></td>
      <td><center><b>Ocupation</b></center></td>
    </tr>

    <?php

include "br_show.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from covid_main_from"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['first_name']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['last_name']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['date']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['email']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['phn_num']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['gender']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['division']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['district']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['village']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['zip']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['nationality']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['national_id']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['marital_status']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['ocupation']; ?></b></font></center></td>
    <td>
</td>
  </tr>	
<?php
}
?>

  
</table>
	


</body>
</html>