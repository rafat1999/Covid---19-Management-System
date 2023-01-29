<?php
include_once 'china_show.php';
$sql = "DELETE FROM india WHERE Country_Name='" . $_GET["deleteid"] . "'";
if (mysqli_query($db, $sql)) {
    header("location:india display.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>