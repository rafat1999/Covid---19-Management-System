<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Country_Name=$_POST['Country_Name'];
        $Effected_People=$_POST['Effected_People'];
        $No_of_cured_people=$_POST['No_of_cured_people'];
        $Total_Numbers_of_Death=$_POST['Total_Numbers_of_Death'];
        

     $servername="localhost";
     $username="root";
     $password="";
     $database="country";
     $conn=mysqli_connect($servername,$username,$password,$database);
     $cheak_duplicate_entry = "SELECT Country_Name FROM india WHERE  Country_Name = '$Country_Name'";
     $cheak = mysqli_query($conn, $cheak_duplicate_entry);
     $count = mysqli_num_rows($cheak); 

     if ($count > 0) {
         echo "Country Name Already Exist.";
         return false;
     } 
     if(!$conn){
          echo("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `india` (`Country_Name`,`Effected_People`,`No_of_cured_people`,`Total_Numbers_of_Death`) VALUES ('$Country_Name','$Effected_People','$No_of_cured_people','$Total_Numbers_of_Death')";
         
         $result=mysqli_query($conn,$sql);
         if($result)
         {
             $_SESSION['status']= "<b><i><h1><center>Inserted Information Successfully</center></h1></i></b>";
             header("location:india display.php");

         }
         else
         {
             echo("Go to a error:".mysqli_errno($conn));
         }
        }
    }
?>