<?php

include_once 'config.php';
$id = filter_input(INPUT_GET, 'id');
$jid = filter_input(INPUT_GET, 'jid');
$sql = "UPDATE `employee` SET `cjid`='$jid' WHERE id=$id";
//echo $sql;

if ($con->query($sql)) {
    echo '<script>alert("Updated Successfully...")</script>';
    echo '<script>window.location="job_assign.php?id='.$jid.'"</script>';
} else {
    echo '<script>alert("Error : '. mysqli_error($con).', Try Again...")</script>';
    echo '<script>window.location="job_assign.php?id='.$jid.'"</script>';
}
