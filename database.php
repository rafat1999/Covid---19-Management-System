<?php
$servername='localhost';
$username='root';
$password='';
$database = "final_project";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>




