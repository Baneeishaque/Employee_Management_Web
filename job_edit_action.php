<?php

include_once 'config.php';
$id = filter_input(INPUT_POST, 'id');
$description = filter_input(INPUT_POST, 'description');
$hours = filter_input(INPUT_POST, 'hours');
if(isset($_POST['remarks']))
{
    $remarks = filter_input(INPUT_POST, 'remarks');
    $sql = "UPDATE `job` SET `description`='$description',`hours`='$hours',`remarks`='$remarks',`status`='OK' WHERE id=$id";
}
 else {
     $sql = "UPDATE `job` SET `description`='$description',`hours`='$hours' WHERE id=$id";
}

//echo $sql;
if ($con->query($sql)) {
    echo '<script>alert("Updated Successfully...")</script>';
    echo '<script>window.location="jobs.php"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="job_edit.php?id='.$id.'"</script>';
}
