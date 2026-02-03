<?php
$conn = mysqli_connect("localhost", "root", "", "pglife");

if (!$conn) {
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
?>
