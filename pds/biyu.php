<?php

include('config.php');
if (isset($_GET['token'])) {
    $id = intval($_GET['token']);

    $sql = "SELECT * FROM pds_persons WHERE pds_person_id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $surname = $row['pds_surname'];
        $fname = $row['pds_first_name'];
        $mname = $row['pds_middle_name'];
        $dateBirth = $row['pds_date_of_birth'];
        $placeBirth = $row['pds_place_of_birth'];
        $sex = $row['pds_sex'];
        $civilStatus = $row['pds_civil_status'];
        $height = $row['pds_height_cm'];
        $weight = $row['pds_weight_kg'];
        $bloodType = $row['pds_blood_type'];
        $gsis = $row['pds_gsis_no'];
        $pagIbig = $row['pds_pagibig_no'];
        $philHealth = $row['pds_philhealth_no'];
        $sss = $row['pds_sss_no'];
        $tin = $row['pds_tin_no'];
        $agency = $row['pds_agency_no'];
        $citizenship = $row['pds_citizenship'];
        $resStreet = $row['pds_res_street'];
        $resBrgy = $row['pds_res_brgy'];
        $resCity = $row['pds_res_city'];
        $perStreet = $row['pds_per_street'];
        $perBrgy = $row['pds_per_brgy'];
        $perCity = $row['pds_per_city'];
        $telephone = $row['pds_telephone'];
        $mobile = $row['pds_mobile'];
        $email = $row['pds_email'];
    } else {
        die("Record not found!");
    }
} else {
    die("invalid request!");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Person</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Personal Information</h2>
  <table class="table table-bordered">
    <tr><th>Full Name</th><td><?php echo "$surname, $fname $mname"; ?></td></tr>
    <tr><th>Date of Birth</th><td><?php echo $dateBirth; ?></td></tr>
    <tr><th>Place of Birth</th><td><?php echo $placeBirth; ?></td></tr>
    <tr><th>Sex</th><td><?php echo $sex; ?></td></tr>
    <tr><th>Civil Status</th><td><?php echo $civilStatus; ?></td></tr>
    <tr><th>Height (cm)</th><td><?php echo $height; ?></td></tr>
    <tr><th>Weight (kg)</th><td><?php echo $weight; ?></td></tr>
    <tr><th>Blood Type</th><td><?php echo $bloodType; ?></td></tr>
    <tr><th>GSIS No.</th><td><?php echo $gsis; ?></td></tr>
    <tr><th>Pag-IBIG No.</th><td><?php echo $pagIbig; ?></td></tr>
    <tr><th>PhilHealth No.</th><td><?php echo $philHealth; ?></td></tr>
    <tr><th>SSS No.</th><td><?php echo $sss; ?></td></tr>
    <tr><th>TIN No.</th><td><?php echo $tin; ?></td></tr>
    <tr><th>Agency No.</th><td><?php echo $agency; ?></td></tr>
    <tr><th>Citizenship</th><td><?php echo $citizenship; ?></td></tr>
    <tr><th>Residential Address</th>
        <td><?php echo "$resStreet St, $resBrgy, $resCity"; ?></td>
    </tr>
    <tr><th>Permanent Address</th>
        <td><?php echo "$perStreet, $perBrgy, $perCity"; ?></td>
    </tr>
    <tr><th>Telephone</th><td><?php echo $telephone; ?></td></tr>
    <tr><th>Mobile</th><td><?php echo $mobile; ?></td></tr>
    <tr><th>Email</th><td><?php echo $email; ?></td></tr>
  </table>

  <a href="pds.php" class="btn btn-secondary">Back</a>
  <a href="pds.php?token=<?php echo $row['pds_person_id']; ?>" class="btn btn-primary">Edit</a>

</body>
</html>
