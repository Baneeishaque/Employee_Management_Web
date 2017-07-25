<?php
session_start();
include_once 'config.php';
$id = $_SESSION["user_id"];
$date = filter_input(INPUT_POST, 'date');
$hours = filter_input(INPUT_POST, 'hours');
$reason = filter_input(INPUT_POST, 'reason');
$sql = "INSERT INTO `leave`(`start_day`, `eid`, `reason`, `start_month`, `start_year`, `hours`) "
        . "VALUES ('".substr($date, 0, 2)."','$id','$reason','".substr($date, 3, 2)."','".substr($date, 6, 4)."','$hours')";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="employee_leaves.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="employee_take_leave.php"</script>';
}
