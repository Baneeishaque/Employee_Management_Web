<?php

include_once 'config.php';
$id = filter_input(INPUT_GET, 'id');
$remarks = filter_input(INPUT_POST, 'assign_remarks');



$sql = "UPDATE `job` SET `status`='Going',`remarks`='$remarks' WHERE id=$id";




//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Updated Successfully...")</script>';
    echo '<script>window.location="jobs.php"</script>';
} else {
    echo '<script>alert("Error : ' . mysqli_error($con) . ', Try Again...")</script>';
    echo '<script>window.location="job_assign.php?id=' . $id . '"</script>';
}
