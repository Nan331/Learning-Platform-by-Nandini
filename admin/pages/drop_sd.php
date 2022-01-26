<?php
include '../../database/config.php';
$sdid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_users WHERE user_id='$sdid'";

if ($conn->query($sql) === TRUE) {
    header("location:../students.php");
} else {
    header("location:../students.php");
}

$conn->close();
?>
