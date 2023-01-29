<?php

$db = mysqli_connect("localhost","root","","country");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>