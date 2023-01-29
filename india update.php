<?php
include_once 'china_show.php';
if(count($_POST)>0) {
mysqli_query($db,"UPDATE india set Country_Name='" . $_POST['Country_Name'] . "', Effected_People='" . $_POST['Effected_People'] . "', No_of_cured_people='" . $_POST['No_of_cured_people'] . "' ,Total_Numbers_of_Death='" . $_POST['Total_Numbers_of_Death'] . "' WHERE Country_Name ='" . $_POST['Country_Name'] . "'");
header("location:india display.php");
}
$result = mysqli_query($db,"SELECT * FROM india WHERE Country_Name='" . $_GET['updateid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Hospital info </title>
</head>
<body>
	
		<form name="frmUser" method="post" action="">
			
			City Name: <br>
			<input type="text" name="Country_Name" class="txtField" value="<?php echo $row['Country_Name']; ?>">
			<br>
		    Effected People :<br>
			<input type="text" name="Effected_People" class="txtField" value="<?php echo $row['Effected_People']; ?>">
			<br>
			No of cured People :<br>
			<input type="text" name="No_of_cured_people" class="txtField" value="<?php echo $row['No_of_cured_people']; ?>">
			<br>
			Total Death<br>
			<input type="text" name="Total_Numbers_of_Death" class="txtField" value="<?php echo $row['Total_Numbers_of_Death']; ?>">
			<br>
			
			<input type="submit" name="submit" value="Update" class="buttom">

		</form>
</body>
</html>