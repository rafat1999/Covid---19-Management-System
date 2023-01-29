<?php
  include 'connect.php';

  if(isset($_POST['submit']))
  {
    $hospital_name=$_POST['hospital_name'];
    $oxyzen_level=$_POST['oxyzen_level'];
    $bed_covid=$_POST['bed_covid'];
    $icu_covid=$_POST['icu_covid'];
    $contact=$_POST['contact'];

    $sql="INSERT INTO 'br_hos' (hospital_name,oxyzen_level,bed_covid,icu_covid,contact) values('$hospital_name','$oxyzen_level','$bed_covid','$icu_covid','$contact')";
    $result=mysqli_query($con, $sql);
    if($result)
    {
      echo "Successful Inserted";
    }else
    {
      die(mysqli_error($con));
    }

  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Operations</title>
  </head>
  <body>
    <b><h2><center>Insert Hospital Information</center></h2></b>
    <div class="container my-5">
      <form method="POST">
        <div class="form-group">
           <label>Hospital Name</label>
          <input type="text" class="form-control"placeholder="Enter Hospital Name" name="hospital_name" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Oxyzen Sock</label>
          <input type="text" class="  form-control"placeholder="Enter oxyzen stock" name="oxyzen_level" autocomplete="off">
         </div>
         <div class="form-group">
            <label>Bed For Covid Patients</label>
           <input type="text" class="  form-control"placeholder="Enter bed numbers" name="bed_covid" autocomplete="off">
         </div>
  
        <div class="form-group">
          <label>ICU Beds</label>
          <input type="text" class="  form-control"placeholder="Enter ICU beds numbers" name="icu_covid" autocomplete="off">
         </div>
         <div class="form-group">
          <label>Emergency Contact</label>
          <input type="text" class="  form-control"placeholder="Enter Contact Number" name="contact" autocomplete="off">
         </div>
  
  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    
  </body>
</html>