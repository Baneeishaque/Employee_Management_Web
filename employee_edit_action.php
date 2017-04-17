<?php

include_once 'config.php';
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$address = filter_input(INPUT_POST, 'address');
$mobile = filter_input(INPUT_POST, 'mobile');
$dob = filter_input(INPUT_POST, 'dob');
$email = filter_input(INPUT_POST, 'email');
$designation = filter_input(INPUT_POST, 'designation');
$sql = "UPDATE `employee` SET `name`='$name',`address`='$address',`dob`='$dob',`mobile`='$mobile',`email`='$email',`did`='$designation' WHERE id=$id";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="employee_edit.php?id='.$id.'"</script>';
}
