<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $date=$_POST['date'];
        $email=$_POST['email'];
        $phn_num=$_POST['phn_num'];
        $gender=$_POST['gender'];
        $division=$_POST['division'];
        $district=$_POST['district'];
        $village=$_POST['village'];
        $zip=$_POST['zip'];
        $nationality=$_POST['nationality'];
        $national_id=$_POST['national_id'];
        $marital_status=$_POST['marital_status'];
        $ocupation=$_POST['ocupation'];
       

     $servername="localhost";
     $username="root";
     $password="";
     $database="final_project";
     $conn=mysqli_connect($servername,$username,$password,$database);
     $cheak_duplicate_entry = "SELECT first_name, last_name FROM covid_main_from WHERE  first_name = '$first_name' || last_name = '$last_name'";
    
     $cheak = mysqli_query($conn, $cheak_duplicate_entry);
     $count = mysqli_num_rows($cheak); 

     if ($count > 0) {
         echo "Already Exist. please Insert Name, NID";
         return false;
     }
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `covid_main_from` (`first_name`,`last_name`,`date`,`email`,`phn_num`,`gender`,`division`,`district`,`village`,`zip`,`nationality`,`national_id`,`marital_status`,`ocupation`) VALUES ( '$first_name','$last_name','$date','$email','$phn_num','$gender','$division','$district','$village','$zip','$nationality','$national_id','$marital_status','$ocupation')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             $_SESSION['status']= "<b><i><h1><center>From Registration Successfully</center></h1></i></b>";
             header("location:Covid-19 registration from.php");

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
?>