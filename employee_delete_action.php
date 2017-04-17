<?php

include_once 'config.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "DELETE FROM `employee` WHERE id=$id";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Deleted Successfully...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
}
