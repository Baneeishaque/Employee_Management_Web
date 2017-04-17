<?php

session_start();
include_once 'config.php';
$id = $_SESSION["user_id"];

$sql = "SELECT * FROM `attendance` WHERE `day`=DATE_FORMAT(NOW(),'%d') AND `month`=".date('m')." AND `year`=DATE_FORMAT(NOW(),'%Y') AND `eid`=$id";
//echo $sql;
$result = $con->query($sql);
$count = mysqli_num_rows($result);
if ($count == 0) {
    $sql = "INSERT INTO `attendance`(`day`, `month`, `year`, `eid`) VALUES (DATE_FORMAT(NOW(),'%d'),".date('m').",DATE_FORMAT(NOW(),'%Y'),$id)";
//echo $sql;
    if ($con->query($sql)) {
        echo '<script>alert("Added Successfully...")</script>';
        echo '<script>window.location="employee_dashboard.php"</script>';
    } else {
        echo '<script>alert("Error : ' . mysqli_error($con) . ', Try Again...")</script>';
        echo '<script>window.location="employee_dashboard.php"</script>';
    }
} else {
    echo '<script>alert("Already taken...")</script>';
    echo '<script>window.location="employee_dashboard.php"</script>';
}
