<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Vaccine Registration From</title>
</head>
<body style="background-image: url(picture/01.jpg); background-repeat: no-repeat; background-size: cover;">
	<table width="100%" height="50px" cellspacing="4" cellpadding="4" bgcolor="black">
    <tr>
      <td align="left">
        <table width="550" border="0" align="left" cellspacing="1" cellpadding="1" >
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/login.php">Covid-19</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/country.php">Country</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/vaccine.php">Vaccine</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/Covid-19 registration from.php">Registration</a></font></td>
      </table>
      </td>
      
    </tr>
  </table>
	<?php
	if (isset($_SESSION['status'])) 
	{
		echo $_SESSION['status'];
		unset($_SESSION['status']);
	}
	?>
	<form action="registration_2.php" method="POST" align="center" name="reg_form" onsubmit="return validate()">
	<u><center><h1>Covid-19 Vaccine Registration From</h1></center></u>	
	
	<table align="center" height="500px" width="90%" border="3" >
		<tr>
			<td><font face="Time New Romans"><i>First Name: <i></font></td>
			<td><input type="text" name="first_name" maxlength="30"></td>
		</tr>
		<tr>
			<td>Last Name: </td>
			<td><input type="text" name="last_name" maxlength="30"></td>
		</tr>
		<tr>
			<td>Date of birth</td>
			<td>
				<label><input type="date" name="date"></label>
			</td>
		</tr>
		<tr>
			<td>Email Id:</td>
			<td><input type="text" name="email" maxlength="30"></td>
		</tr>
		<tr>
			<td>Phone No: </td>
			<td><input type="text" name="phn_num" maxlength="11"></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td><input type="radio" name="gender" value="Male"><b>Male</b>
			<input type="radio" name="gender" value="Female"><b>Female</b>

			</td>
			
		</tr>
		<tr>
			<td>Division: </td>
			<td><input type="text" name="division" maxlength="30">
			</td>
		</tr>
		<tr>
			<td>District: </td>
			<td><input type="text" name="district" maxlength="30">
			</td>
		</tr>
		<tr>
			<td>Village/Road No/ Block: </td>
			<td><input type="text" name="village" maxlength="200">
			</td>
		</tr>
		<tr>
			<td>Zip Code: </td>
			<td><input type="text" name="zip" maxlength="50">
			</td>
		</tr>
		<tr>
			<td>Nationality: </td>
			<td><input type="text" name="nationality" maxlength="150">
			</td>
		</tr>
		<tr>
			<td>National Id: </td>
			<td><input type="text" name="national_id" maxlength="25">
			</td>
		</tr>
		<tr>
			<td>Marital Status: </td>
			<td>
				<input type="checkbox" name="marital_status" id="marital_status" value="Married" ><b>Married</b>
				<input type="checkbox" name="marital_status" id="marital_status" value="Unmarried"><b>Unmarried</b>
				<input type="checkbox" name="marital_status" id="marital_status" value="Devorsed"><b>Devorsed</b>
			</td>
		</tr>
		<tr>
			<td>Ocupation: </td>
			<td><select id="ocupation" name="ocupation">
					<option value="1">Select a ocupation</option>
					<option value="Banker">Banker</option>
					<option value="Businessman">Businessman</option>
					<option value="Doctor">Doctor</option>
					<option value="Engineer">Engineer</option>
					<option value="Govt.employee">Govt. employee</option>
					<option value="Farmer">Farmer</option>
					<option value="Student">Student</option>
					<option value="Others">others</option>
				</select>
			</td>
			
			
		</tr>
		
			
				
	</table>
	<br>
	<br>
	<table align="left" height="20px" width="20%">
		<tr>
			<td>
				<h2><i><font face="Time New Romans"><input type="submit" value="Register"></font></i></h2>
			</td>
			
		</tr>

	</table>
	<br>
	<br>
	<table align="right" height="20px" width="20%">
		<tr>
			<td>
				<i><font face="Time New Romans"><input type="reset" value="Reset"></font></i><h2></h2>
			</td>
			
		</tr>

	</table>
	
</from>

<script type="text/javascript">
	function validate()
	{
		var fname= document.forms["reg_form"]["first_name"].value;
		var lname= document.forms["reg_form"]["last_name"].value;
		var date= document.forms["reg_form"]["date"].value;
		var email= document.forms["reg_form"]["email"].value;
		var phone= document.forms["reg_form"]["phn_num"].value;
		var gender= document.forms["reg_form"]["gender"].value;
		var division= document.forms["reg_form"]["division"].value;
		var district= document.forms["reg_form"]["district"].value;
		var village= document.forms["reg_form"]["village"].value;
		var zip= document.forms["reg_form"]["zip"].value;
		var nationality= document.forms["reg_form"]["nationality"].value;
		var national_id= document.forms["reg_form"]["national_id"].value;
		var marital_status= document.getElementById("marital_status");
		var ocupation= document.getElementById("ocupation");
		



		//First Name Validation
		if (fname == "") 
		{
			alert("PLEASE FILL THE FIRST NAME BOX");
			return false;
		}
		if (!isNaN(fname)) 
		{
			alert("There is no number inside the name");
			return false;
		}

		//Last Name Validation
		if (lname == "") 
		{
			alert("PLEASE FILL THE LAST NAME BOX");
			return false;
		}
		if (!isNaN(lname)) 
		{
			alert("There is no number inside the name");
			return false;
		}

		//DOB Validation
		if (date == "") 
		{
			alert("PLEASE INSERT YOUR DATE OF BIRTH");
			return false;
		}


		//EMAIL validation

		var at=email.indexOf("@");
		var dot=email.lastIndexOf("."); 
		if (at<1 || dot<at+2 || dot+2>=email.length)
		{  
  			alert("PLEASE INSERT A VALID EMAIL ADRESS \n\n(abc@gmail.com)");  
  			return false;  
  		}  

  		//Phone No. Validation

  		if (phone == "") 
  		{
  			alert("PLEASE FILL THE PHONE NO FIELD");
  			return false;
  		} 
  		if (isNaN(phone)) 
  		{
  			alert("Phone Number only carry digits.");
  			return false;
  		}
  		if (phone.length!=11) 
  		{
  			alert("Phone number must be 11 desit");
  			return false;  		
  		}

  		//Gender cheak
  		if (gender == "") 
  		{
  			alert("PLEASE FILL THE GENDER FIELD");
  			return false;
  		}

  		//Diviision
  		if (division == "") 
  		{
  			alert("FILL THE DIVISION FIELD");
  			return false;
  		}
  		if (!isNaN(division)) 
  		{
  			alert("DIVISION DOES NOT CARRY ANY DIGIT");
  			return false;
  		}


  		//District
  		if (district == "") 
  		{
  			alert("FILL THE DISTRICT FIELD");
  			return false;
  		}
  		if (!isNaN(district)) 
  		{
  			alert("DISTRICT DOES NOT CARRY ANY DIGIT");
  			return false;
  		}

  		//VILLAGE
  		if (village == "") 
  		{
  			alert("FILL THE VILLAGE FIELD");
  			return false;
  		}

  		//ZIP
  		if (zip == "") 
  		{
  			alert("PLEASE INSERT THE ZIP CODE");
  			return false;
  		}
  		if (isNaN(zip)) 
  		{
  			alert("ZIP CODE DOES NOT CARRY ANY CARRACTER");
  			return false;
  		}


  		//Nationality
  		if (nationality == "") 
  		{
  			alert("PLEASE FILL THE NATIONALITY FIELD");
  			return false;
  		}
  		if (!isNaN(nationality)) 
  		{
  			alert("Nationality doesnot carry the digit");
  			return false;
  		}


  		//National ID

  		if (national_id == "") 
  		{
  			alert("PLEASE FILL THE NATIONAL ID");
  			return false;
  		}
  		if (isNaN(national_id)) 
  		{
  			alert("Input valid national id");
  			return false;
  		}
  		if (national_id.length != 10) 
  		{
  			alert("Please Inser 10 degit number");
  			return false;
  		}
  		
  		//Ocupation

  		if (ocupation.value == "1") 
  		{
  			alert("Select your Ocupation");
  			return false;
  		}


	}

	
</script>

</body>
</html>