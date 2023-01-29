<?php
include_once 'br_show.php';
$sql = "DELETE FROM br_hos WHERE hospital_name='" . $_GET["deleteid"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:br_display.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>