<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bangladesh</title>
</head>
<body style="background-image: url(IMG/ban.jpg); background-repeat: no-repeat; background-size: cover;">
	<?php
	if (isset($_SESSION['status'])) 
	{
		echo $_SESSION['status'];
		unset($_SESSION['status']);
	}
	?>
	<form action="bangladesh_process.php" method="POST" align="center" name="my_form" onsubmit="return validate()">
		<b><center><font face="Time New Romans" size="10">Insert Country Information</font></center></b><br><br><br>
		<table align="center" border="2" width="50%" bgcolor="white">
			<tr>
				<td>City Name: </td>
				<td><input type="text" name="Country_Name"></td>
			</tr>
			<tr>
				<td>Effected People: </td>
				<td><input type="text" name="Effected_People"></td>
			</tr>
			<tr>
				<td>No of Cured People: </td>
				<td><input type="text" name="No_of_cured_people"></td>
			</tr>
			<tr>
				<td>Total Numbers of Death: </td>
				<td><input type="text" name="Total_Numbers_of_Death"></td>
			</tr>
			
		</table>
		<br>
		<br>
		<table align="center" border="3"> 
			<tr>
				<td><center><input type="submit" value="Register"></center></td>
			</tr>
		</table>		
	</form>
	<script type="text/javascript">
		function validate()
		{
			var name= document.forms["my_form"]["Country_Name"].value;
			var epeople= document.forms['my_form']["Effected_People"].value;
			var cpeople= document.forms["my_form"]["No_of_cured_people"].value;
			var death= document.forms["my_form"]["Total_Numbers_of_Death"].value;
			

			if (name == "") 
			{
				alert("insert country name");
				return false;
			}
			if (!isNaN(name)) 
			{
				alert("Name can not carry number");
				return false;
			}
			if (epeople == "") 
			{
				alert("Insert total number of Effected_People");
				return false;
			}
		
			if (cpeople == "") 
			{
				alert("Insert the no of cured people");
				return false;
			}
			
			if (death == "") 
			{
				alert("Insert the No Of death");
				return false;
			}
			
		}
	</script>


 
</body>
</html>