<?php
include_once 'br_show.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE chittagong set hospital_name='" . $_POST['hospital_name'] . "', oxyzen_level='" . $_POST['oxyzen_level'] . "', bed_covid='" . $_POST['bed_covid'] . "' ,icu_covid='" . $_POST['icu_covid'] . "',contact='" . $_POST['contact'] . "' WHERE hospital_name='" . $_POST['hospital_name'] . "'");
header("location:ch display.php");
}
$result = mysqli_query($conn,"SELECT * FROM chittagong WHERE hospital_name='" . $_GET['updateid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Hospital info </title>
</head>
<body>
	
		<form name="frmUser" method="post" action="">
			<div><?php if(isset($message)) { echo $message; } ?>
			</div>
			Hospital Name: <br>
			<input type="text" name="hospital_name" class="txtField" value="<?php echo $row['hospital_name']; ?>">
			<br>
			Oxyzen Stock :<br>
			<input type="text" name="oxyzen_level" class="txtField" value="<?php echo $row['oxyzen_level']; ?>">
			<br>
			Beds:<br>
			<input type="text" name="bed_covid" class="txtField" value="<?php echo $row['bed_covid']; ?>">
			<br>
			ICU Beds<br>
			<input type="text" name="icu_covid" class="txtField" value="<?php echo $row['icu_covid']; ?>">
			<br>
			Contact<br>
			<input type="text" name="contact" class="txtField" value="<?php echo $row['contact']; ?>">
			<br>
			<input type="submit" name="submit" value="Update" class="buttom">

		</form>
</body>
</html>