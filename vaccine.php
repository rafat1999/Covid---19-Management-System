<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('IMG/pic3.jpg'); background-repeat: no-repeat;
  background-size: cover;">
  <table width="100%" height="50px" cellspacing="4" cellpadding="4" bgcolor="black">
    <tr>
      <td align="left">
        <table width="550" border="0" align="left" cellspacing="1" cellpadding="1" >
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/login.php">Covid-19</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/country.php">Country</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="/Project/vaccine.php">Vaccine</a></font></td>
        <td width="165"><font face="Time New Romans, Vrinda" color="white"><a href="Covid-19 registration from.php">Registration</a></font></td>
      </table>
      </td>
      
    </tr>
  </table>
  <form align="right" name="vaccine" action="">
    
    <table align="right" height="20px" width="18.5%" border="3">
      <tr>
        <td><b>Chooice your For Hospital List: </b></td>
        <td>
          <select name="vaccine" id="vac">
            <option value="none" selected="selected">Choice option</option>
            <option value="/Project/br_show2.php">Barisal</option>
            <option value="/Project/chittagong.php">Chitagong</option>
            <option value="/Project/dhaka.php">Dhaka</option>
            <option value="/Project/mymenshing.php">Mymenshing</option>
         
            
            </select>
        </td>
      </tr>
      
    </table>
   
  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <table>
    <tr>
      <font face="Time New Romans" size="8">
        WHY ARE FULLY VACCINATED PEOPLE STILL CATCHING COVID-19?<br><br>
      </font>
      <font face="Time New Romans " size="6">
      No vaccine is perfect, so “breakthrough infections”, where people get sick with an infection even after vaccination, are to be expected with any disease. But just how common are they when it comes to COVID-19, and what should you expect if you test positive for SARS-CoV-2 after being fully vaccinated? 
        
      </font>
      
    </tr>
  </table>
  <br><br><br><br><br><br><br><br><br>
  <table>
    <tr>
      <font face="Time New Romans" size="8">
        DO KIDS NEED A COVID-19 VACCINE?<br><br>
      </font>
      <font face="Time New Romans " size="6">
      New variants have evolved that seem to be able to affect children more, with low- and middle-income countries worst affected. New research is showing vaccines can be effective in children, but they remain at relatively low risk of the disease. While millions of vulnerable people in low- and middle-income countries have yet to have a single dose, it’s vital that they remain priorities for vaccine rollouts.
        
      </font>
      
    </tr>
  </table>
  <br><br><br><br><br><br><br><br><br>
  <table>
    <tr>
      <font face="Time New Romans" size="8">
        DO COVID-19 VACCINES AFFECT FERTILITY OR PERIODS?<br><br>
      </font>
      <font face="Time New Romans " size="6">
     Anecdotal evidence suggests the vaccine could temporarily affect menstruation, but the effects are short-lived and scientists say there is no evidence that vaccines affect fertility.
        
      </font>
      
    </tr>
  </table>

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
   
</body>
</html>