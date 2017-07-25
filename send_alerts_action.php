<?php

include_once 'config.php';
$message = filter_input(INPUT_POST, 'message');

$sql = "INSERT INTO `alert`(`message`) VALUES ('$message')";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="send_alerts.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="send_alerts.php"</script>';
}
