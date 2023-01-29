<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('IMG/pic3.jpg'); background-repeat: no-repeat;
  background-size: cover;">
  <table width="100%" height="50px" cellspacing="4" cellpadding="4" bgcolor="black">
    <tr>
      <td align="left">
        <table width="550" border="0" align="left" cellspacing="1" cellpadding="1" >
        <td width="165"><font face="Time New Romans, Vrinda" color="white">Covid-19</font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="info.php">IUD</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="country.php">Country</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="vaccine.php">Vaccine</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="Covid-19 registration from.php">Registration</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="signup.php">Sign up</a></font></td>
        <td width="150"><font face="Time New Romans, Vrinda" color="white"><a href="logout.php">Logout</a></font></td>
      </table>
      </td>
      
    </tr>
  </table>
  <br><br><br>
  <form align="right" name="Country">
  
  <table align="left" height="20px" width="45%" border="3">
      <tr>
        <td><i><b><h3><font face="Time New Romans">Choose your Country For Show Information: </font></h3></b></i></td>
        <td>
    <select name="CountryMenu" id="CountryMenu">
       <option value="nothing" selected="selected">Choose your option</option>
       <option value="/Project/china display.php">China</option>
       <option value="/Project/itali display.php">Italy</option>
       <option value="/Project/india display.php">India</option>
       <option value="/Project/bangladesh display.php">Bangladesh</option>
    </select>
    </td>
      </tr>
      
    </table>
    
  </form>
  <table align="right" height="20px" width="45%" border="3">
      <tr>
        <td><i><h3><b><font face="Time New Romans">Chooice your For Hospital List: </font></b></h3></i></td>
        <td>
          <select name="vaccine" id="vac">
            <option value="none" selected="selected">Choice option</option>
            <option value="/Project/br_display.php">Barisal</option>
            <option value="/Project/ch display.php">Chittagong</option>
            <option value="/Project/dhaka display.php">Dhaka</option>
            <option value="/Project/my display.php">Mymenshing</option>
         
            
            </select>
        </td>
      </tr>
      
    </table>
    <br><br>
    <br><br>
    <br><br>
    <table align="center" border="3" width="35%" height="20px">
      <tr>
        <td><h3><b><font face="Time New Romans">For Show Registration Candidates</font></b></h3></td>
        <td><a href="/Project/registrationinfo.php" target="_blank"><b><font color="black">Click Here</font></b></a></td>
      </tr>
      
    </table>
  <script type="text/javascript">
    var info = document.getElementById('CountryMenu');
    info.onchange = function()
    {
      var option = this.options[this.selectedIndex];
      if (option.value != "nothing") 
      {
        window.open(option.value, "Country Info", "");
      }
    }
  </script>

  <script type="text/javascript">
    var info = document.getElementById('vac');
    info.onchange = function()
    {
      var option = this.options[this.selectedIndex];
      if (option.value != "none") 
      {
        window.open(option.value, "Vaccine Info", "");
      }
    }
  </script>
  <br><br><br>

  </div>
</body>
</html>