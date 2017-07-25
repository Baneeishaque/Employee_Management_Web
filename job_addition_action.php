<?php

include_once 'config.php';
$description = filter_input(INPUT_POST, 'description');
$hours = filter_input(INPUT_POST, 'hours');

$sql = "INSERT INTO `job`(`description`, `hours`) VALUES ('$description','$hours')";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="jobs.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
}
