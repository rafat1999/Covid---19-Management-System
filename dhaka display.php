<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Display Data</title>
</head>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="/Project/dhaka_insert.php" class="text-light">Add User</a></button>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Hospital Name</th>
      <th scope="col">Total Oxyzen</th>
      <th scope="col">Bed Covid Patients</th>
      <th scope="col">Total ICU Beds</th>
      <th scope="col">Emergency contact</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php

include "br_show.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from dhaka"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['hospital_name']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['oxyzen_level']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['bed_covid']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['icu_covid']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['contact']; ?></b></font></center></td>
    <td>
	<button class="btn btn-primary"><a href="dhaka update.php? updateid=<?php echo $data['hospital_name']; ?>" class="text-light">Update</a></button>
	<button class="btn btn-danger"><a href="dhaka delete.php? deleteid=<?php echo $data['hospital_name']; ?>" class="text-light">Delete</a></button>
</td>
  </tr>	
<?php
}
?>

  </tbody>
</table>
	</div>


</body>
</html>