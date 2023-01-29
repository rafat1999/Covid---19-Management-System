<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $hospital_name=$_POST['hospital_name'];
        $oxyzen_level=$_POST['oxyzen_level'];
        $bed_covid=$_POST['bed_covid'];
        $icu_covid=$_POST['icu_covid'];
        $contact=$_POST['contact'];

     $servername="localhost";
     $username="root";
     $password="";
     $database="final_project";
     $conn=mysqli_connect($servername,$username,$password,$database);

     $cheak_duplicate_entry = "SELECT hospital_name FROM br_hos WHERE  hospital_name = '$hospital_name'";
     $cheak = mysqli_query($conn, $cheak_duplicate_entry);
     $count = mysqli_num_rows($cheak); 

     if ($count > 0) {
         echo "Hospital Name Already Exist.";
         return false;
     }
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `br_hos` (`hospital_name`,`oxyzen_level`,`bed_covid`,`icu_covid`,`contact`) VALUES ('$hospital_name','$oxyzen_level','$bed_covid','$icu_covid','$contact')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             $_SESSION['status']= "<b><i><h1><center>Inserted Information Successfully</center></h1></i></b>";
             header("location:br_display.php");

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
?>