<?php

include_once 'config.php';
$description = filter_input(INPUT_POST, 'description');
$working_hours = filter_input(INPUT_POST, 'working-hours');
$available_leaves = filter_input(INPUT_POST, 'allowed-leaves');
$salary = filter_input(INPUT_POST, 'salary');
$sql = "INSERT INTO `designation`(`description`, `working-hours`, `allowed-leaves`, `salary`) VALUES ('$description',$working_hours,$available_leaves,$salary)";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="designation.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="designation.php"</script>';
}
