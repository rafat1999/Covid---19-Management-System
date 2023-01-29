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
     if(!$conn){
          echo("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `country` (`Country_Name`,`Effected_People`,`No_of_cured_people`,`Total_Numbers_of_Death`) VALUES ('$Country_Name','$Effected_People','$No_of_cured_people','$Total_Numbers_of_Death')";
         
         $result=mysqli_query($conn,$sql);
         if($result)
         {
             $_SESSION['status']= "<b><i><h1><center>Inserted Information Successfully</center></h1></i></b>";
             header("location:China.php");

         }
         else
         {
             echo("Go to a error:".mysqli_errno($conn));
         }
        }
    }
?>