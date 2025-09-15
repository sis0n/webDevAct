<?php
include('config.php');

if (isset($_GET['token'])) {
    $id = intval($_GET['token']); //para safe

    $sql = "DELETE FROM pds_persons WHERE pds_person_id = $id";
    if ($conn->query($sql)) {
        header("Location: pds.php?msg=deleted");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    header("Location: pds.php");
    exit;
}
