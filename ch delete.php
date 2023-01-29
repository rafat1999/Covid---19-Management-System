<?php
include_once 'br_show.php';
$sql = "DELETE FROM chittagong WHERE hospital_name='" . $_GET["deleteid"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:ch display.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>