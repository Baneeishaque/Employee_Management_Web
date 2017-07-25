<?php

include_once 'config.php';
$id = filter_input(INPUT_GET, 'id');
$sql = "DELETE FROM `leave` WHERE id=$id";
//echo $sql;

if ($con->query($sql)) {
    echo '<script>alert("Updated Successfully...")</script>';
    echo '<script>window.location="employee_leaves.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="employee_leaves.php"</script>';
}
