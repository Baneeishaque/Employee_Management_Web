<?php

include_once 'config.php';
$id = filter_input(INPUT_POST, 'id');
$description = filter_input(INPUT_POST, 'description');
$working_hours = filter_input(INPUT_POST, 'working-hours');
$available_leaves = filter_input(INPUT_POST, 'allowed-leaves');
$salary = filter_input(INPUT_POST, 'salary');
$sql = "UPDATE `designation` SET `description`='$description',`working-hours`=$working_hours,`allowed-leaves`=$available_leaves,`salary`=$salary WHERE id=$id";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Updated Successfully...")</script>';
    echo '<script>window.location="designation.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="designation_edit.php?id='.$id.'"</script>';
}
