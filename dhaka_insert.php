<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dhaka  Devision</title>
</head>
<body style="background-image: url(IMG/dhaka.jpg); background-repeat: no-repeat; background-size: cover;">
	<?php
	if (isset($_SESSION['status'])) 
	{
		echo $_SESSION['status'];
		unset($_SESSION['status']);
	}
	?>
	<form action="dhaka_process.php" method="POST" align="center" name="my_form" onsubmit="return validate()">
		<u><h1><ceter>Insert Data for Hospital</center></h1></u>
		<table align="center" border="2" width="50%" heigth="40px" bgcolor="#87CEEB">
			
			<tr>
				<td><font face="Time New Romans" size="4"><b>Name of the hospital:</b></font></td>
				<td><input type="text" name="hospital_name"></td>
			</tr>
			<tr>
				<td><font face="Time New Romans" size="4"><b>Oxyzen Stock:(%) </b></font></td>
				<td><input type="text" name="oxyzen_level"></td>
			</tr>
			<tr>
				<td><font face="Time New Romans" size="4"><b>Bed For Covid patients: </b></font></td>
				<td><input type="text" name="bed_covid"></td>
			</tr>
			<tr>
				<td><font face="Time New Romans" size="4"><b>ICU Bed: </b></font></td>
				<td><input type="text" name="icu_covid"></td>
			</tr>
			<tr>
				<td><font face="Time New Romans" size="4"><b>Emergency Contact: </b></font></td>
				<td><input type="text" name="contact"></td>
			</tr>

		</table>
		<br>
		<br>
		<table align="center" border="2">
			<tr>
				<td><b><input type="submit" value="Register"></b></td>
			</tr>
		</table>		
	</form>
	<script type="text/javascript">
		function validate()
		{
			var name= document.forms["my_form"]["hospital_name"].value;
			var oxyzen= document.forms['my_form']["oxyzen_level"].value;
			var bed= document.forms["my_form"]["bed_covid"].value;
			var icu= document.forms["my_form"]["icu_covid"].value;
			var contact= document.forms['my_form']["contact"].value;

			
			if (name == "") 
			{
				alert("Insert Hospital Name");
				return false;
			}
			if (!isNaN(name)) 
			{
				alert("Name Can Not Carry Number");
				return false;
			}
			if (oxyzen == "") 
			{
				alert("Insert Oxyzen Stock");
				return false;
			}
			if (isNaN(oxyzen)) 
			{
				alert("Inset Only Numbers ");
				return false;
			}
			if (bed == "") 
			{
				alert("Insert The No Of Bed");
				return false;
			}
			if (isNaN(bed)) 
			{
				alert("Beds Carry Only Number");
				return false;
			}
			if (icu == "") 
			{
				alert("Insert The ICU Bed");
				return false;
			}
			if (isNaN(icu)) 
			{
				alert("ICU Beds Carry Only Numbers");
				return false;
			}
			if (contact == "") 
			{
				alert("Please Insert Phone Number");
				return false;
			}
			if (isNaN(contact)) 
			{
				alert("Insert Number please");
				return false;
			}
			if (contact.length !=11) 
			{
				alert("Insert 11 digit number");
				return false;
			}
		}
	</script>
</body>

</html>