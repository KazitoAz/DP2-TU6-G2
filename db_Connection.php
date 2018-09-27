<?php
$dbconn = mysqli_connect("127.0.0.1", "root", "", "mydb");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>