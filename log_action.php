<?php

include_once 'config.php';
$username = filter_input(INPUT_POST, 'username');
$passcode = filter_input(INPUT_POST, 'passcode');

$sql = "SELECT `role`, `id` FROM `employee` WHERE username='$username' and passcode='$passcode'";
$result = $con->query($sql);
$count = mysqli_num_rows($result);
if ($count == 0) {
    echo '<script>alert("Invalid Credentials")</script>';
    echo '<script>window.location="index.php"</script>';
} else {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION["user_id"] = $row['id'];
    if ($row['role'] == "manager") {
        header("Location: manager_dashboard.php");
    } else {
        header("Location: employee_dashboard.php");
    }
}

