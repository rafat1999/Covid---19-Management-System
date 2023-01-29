
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
		<button class="btn btn-primary my-5"><a href="/Project/Bangladesh.php" class="text-light">Add User</a></button>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">City Name</th>
      <th scope="col">Effected People</th>
      <th scope="col">No of cured people</th>
      <th scope="col">Total Numbers of Death</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <body>
    <?php

include "china_show.php"; // Using database connection file here

$records = mysqli_query($db,"select * from bangladesh"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['Country_Name']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['Effected_People']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['No_of_cured_people']; ?></b></font></center></td>
    <td><center><font face="Time New Romans" size="4"><b><?php echo $data['Total_Numbers_of_Death']; ?></b></font></center></td>

    <td>
	<button class="btn btn-primary"><a href="bangladesh update.php? updateid=<?php echo $data['Country_Name']; ?>" class="text-light">Update</a></button>
	<button class="btn btn-danger"><a href="bangladesh delete.php? deleteid=<?php echo $data['Country_Name']; ?>" class="text-light">Delete</a></button>
</td>
  </tr>	
<?php
}
?>

  </body>
</table>
	</div>


</body>
</html>