<?php

include_once 'config.php';
$name = filter_input(INPUT_POST, 'name');
$username = filter_input(INPUT_POST, 'username');
$passcode = filter_input(INPUT_POST, 'passcode');
$address = filter_input(INPUT_POST, 'address');
$mobile = filter_input(INPUT_POST, 'mobile');
$dob = filter_input(INPUT_POST, 'dob');
$email = filter_input(INPUT_POST, 'email');
$designation = filter_input(INPUT_POST, 'designation');
$sql = "INSERT INTO `employee`(`username`, `passcode`, `name`, `address`, `dob`, `mobile`, `email`, `did`, `role`) VALUES ('$username','$passcode','$name','$address','$dob','$mobile','$email',$designation,'employee')";
//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Added Successfully...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="manager_dashboard.php"</script>';
}
