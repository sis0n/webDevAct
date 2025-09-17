<?php
include('config.php');

$id = $surname = $fname = $mname = $placeBirth = $sex = $civilStatus =
$height = $weight = $bloodType = $gsis = $pagIbig = $philHealth =
$sss = $tin = $agency = $citizenship = $resStreet = $resBrgy =
$resCity = $perStreet = $perBrgy = $perCity = $telephone = $mobile = $email = "";
$msg = "";

if (isset($_POST['txtFname'])) {
  // var_dump($_POST);
  $id = isset($_POST['pds_person_id']) ? intval($_POST['pds_person_id']) : 0;
  $surname = $_POST['txtSname'];
  $fname = $_POST['txtFname'];
  $mname = $_POST['txtMname'];
  $dateBirth = $_POST['txtdateBirth'];
  $placeBirth = $_POST['txtplaceBirth'];
  $sex = $_POST['txtSex'];
  $civilStatus = $_POST['txtCivilStatus'];
  $height = $_POST['txtHeight'];
  $weight = $_POST['txtWeight'];
  $bloodType = $_POST['txtBloodType'];
  $gsis = $_POST['txtGsis'];
  $pagIbig = $_POST['txtPagIbig'];
  $philHealth = $_POST['txtPhilHealth'];
  $sss = $_POST['txtSss'];
  $tin = $_POST['txtTin'];
  $agency = $_POST['txtAgency'];
  $citizenship = $_POST['txtCit'];
  $resStreet = $_POST['txtStreet'];
  $resBrgy = $_POST['txtBrgy'];
  $resCity = $_POST['txtCity'];
  $perStreet = $_POST['pertxtStreet'];
  $perBrgy = $_POST['pertxtBrgy'];
  $perCity = $_POST['pertxtCity'];
  $telephone = $_POST['txtTel'];
  $mobile = $_POST['txtMobile'];
  $email = $_POST['txtEmail'];

  // check duplicate name
  $checkSql = "SELECT * FROM pds_persons 
             WHERE (
                (pds_surname = '$surname' 
                AND pds_first_name = '$fname' 
                AND pds_middle_name = '$mname')
                OR pds_mobile = '$mobile'
                OR pds_email = '$email'
                OR pds_gsis_no = '$gsis'
                OR pds_pagibig_no = '$pagIbig'
                OR pds_philhealth_no = '$philHealth'
                OR pds_sss_no = '$sss'
                OR pds_tin_no = '$tin'
                OR pds_agency_no = '$agency'
              )";

  if (!empty($id)) {
    // exclude current record kapag update
    $checkSql .= " AND pds_person_id != $id";
  }

  $check = $conn->query($checkSql);

  if ($check && $check->num_rows > 0) {
    $row = $check->fetch_assoc();
    if (
      $row['pds_surname'] == $surname &&
      $row['pds_first_name'] == $fname &&
      $row['pds_middle_name'] == $mname
    ) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  duplicate fullname: ' . $surname . ', ' . $fname . ' ' . $mname . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_mobile'] == $mobile) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  mobile number already in use: ' . $mobile . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_email'] == $email) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  email already in use: ' . $email . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_gsis_no'] == $gsis) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  gsis number already in use: ' . $gsis . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_pagibig_no'] == $pagIbig) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  pag-ibig already in use: ' . $pagIbig . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_philhealth_no'] == $philHealth) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  philhealth already in use: ' . $philHealth . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_sss_no'] == $sss) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  sss already in use: ' . $sss . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_tin_no'] == $tin) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  tin already in use: ' . $tin . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    } elseif ($row['pds_agency_no'] == $agency) {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  agency already in use: ' . $agency . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
  } else {
    if (!empty($id)) {
      // pang update
      $sql = "UPDATE pds_persons SET 
          pds_surname = '$surname',
          pds_first_name = '$fname',
          pds_middle_name = '$mname',
          pds_date_of_birth = '$dateBirth',
          pds_place_of_birth = '$placeBirth',
          pds_sex = '$sex',
          pds_civil_status = '$civilStatus',
          pds_height_cm = '$height',
          pds_weight_kg = '$weight',
          pds_blood_type = '$bloodType',
          pds_gsis_no = '$gsis',
          pds_pagibig_no = '$pagIbig',
          pds_philhealth_no = '$philHealth',
          pds_sss_no = '$sss',
          pds_tin_no = '$tin',
          pds_agency_no = '$agency',
          pds_citizenship = '$citizenship',
          pds_res_street = '$resStreet',
          pds_res_brgy = '$resBrgy',
          pds_res_city = '$resCity',
          pds_per_street = '$perStreet',
          pds_per_brgy = '$perBrgy',
          pds_per_city = '$perCity',
          pds_telephone = '$telephone',
          pds_mobile = '$mobile',
          pds_email = '$email'
        WHERE pds_person_id = $id";
    } else {
      // pang insert
      $sql = "INSERT INTO pds_persons SET 
          pds_surname = '$surname',
          pds_first_name = '$fname',
          pds_middle_name = '$mname',
          pds_date_of_birth = '$dateBirth',
          pds_place_of_birth = '$placeBirth',
          pds_sex = '$sex',
          pds_civil_status = '$civilStatus',
          pds_height_cm = '$height',
          pds_weight_kg = '$weight',
          pds_blood_type = '$bloodType',
          pds_gsis_no = '$gsis',
          pds_pagibig_no = '$pagIbig',
          pds_philhealth_no = '$philHealth',
          pds_sss_no = '$sss',
          pds_tin_no = '$tin',
          pds_agency_no = '$agency',
          pds_citizenship = '$citizenship',
          pds_res_street = '$resStreet',
          pds_res_brgy = '$resBrgy',
          pds_res_city = '$resCity',
          pds_per_street = '$perStreet',
          pds_per_brgy = '$perBrgy',
          pds_per_city = '$perCity',
          pds_telephone = '$telephone',
          pds_mobile = '$mobile',
          pds_email = '$email'";
    }

    if ($conn->query($sql)) {
      header("Location: pds.php?msg=success");
      exit;
    } else {
      $msg = '<div class="alert alert-danger">error saving record: ' . $conn->error . '</div>';
    }
  }
}

if (isset($_GET['token'])) {
  $id = $_GET['token'];

  $sql = "SELECT * FROM pds_persons WHERE pds_person_id = $id";

  if ($rs = $conn->query($sql)) {
    if ($rs->num_rows > 0) {
      $row = $rs->fetch_assoc();
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
    }
  } else {
    echo $conn->error;
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Activity Five | PDS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <div class="container my-5">
    <?php echo $msg; ?>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_name") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          duplicate fullname found.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_mobile") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          mobile number already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_email") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          email already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_gsis") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          gsis already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_pagibig") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          pagibig already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_philhealth") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          philhealth already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_sss") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          sss already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_tin") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          tin already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate_agency") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          agency already in use!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] === "duplicate") {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          Duplicate record found.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    ?>
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Personal Data Sheet</h4>
      </div>
      <div class="card-body">
        <form method="post" class="row g-3">
          <input type="hidden" name="pds_person_id" value="<?php echo $id; ?>">
          <div class="col-md-4">
            <label class="form-label">Surname</label>
            <input type="text" class="form-control" name="txtSname" value="<?php echo $surname; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="txtFname" value="<?php echo $fname; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="txtMname" value="<?php echo $mname; ?>">
          </div>

          <div class="col-md-4">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="txtdateBirth" value="<?php echo $dateBirth; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Place of Birth</label>
            <input type="text" class="form-control" name="txtplaceBirth" value="<?php echo $placeBirth; ?>" required>
          </div>
          <div class="col-md-2">
            <label class="form-label">Sex</label>
            <input type="text" class="form-control" name="txtSex" value="<?php echo $sex; ?>">
          </div>
          <div class="col-md-2">
            <label class="form-label">Civil Status</label>
            <input type="text" class="form-control" name="txtCivilStatus" value="<?php echo $civilStatus; ?>">
          </div>

          <div class="col-md-2">
            <label class="form-label">Height (cm)</label>
            <input type="number" class="form-control" name="txtHeight" value="<?php echo $height; ?>">
          </div>
          <div class="col-md-2">
            <label class="form-label">Weight (kg)</label>
            <input type="number" class="form-control" name="txtWeight" value="<?php echo $weight; ?>">
          </div>
          <div class="col-md-2">
            <label class="form-label">Blood Type</label>
            <input type="text" class="form-control" name="txtBloodType" value="<?php echo $bloodType; ?>">
          </div>

          <div class="col-md-3">
            <label class="form-label">GSIS No.</label>
            <input type="text" class="form-control" name="txtGsis" value="<?php echo $gsis; ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Pag-IBIG No.</label>
            <input type="text" class="form-control" name="txtPagIbig" value="<?php echo $pagIbig; ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">PhilHealth No.</label>
            <input type="text" class="form-control" name="txtPhilHealth" value="<?php echo $philHealth; ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">SSS No.</label>
            <input type="text" class="form-control" name="txtSss" value="<?php echo $sss; ?>">
          </div>

          <div class="col-md-3">
            <label class="form-label">TIN</label>
            <input type="text" class="form-control" name="txtTin" value="<?php echo $tin; ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Agency No.</label>
            <input type="text" class="form-control" name="txtAgency" value="<?php echo $agency; ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Citizenship</label>
            <input type="text" class="form-control" name="txtCit" value="<?php echo $citizenship; ?>">
          </div>

          <div class="col-12">
            <h5 class="mt-4">Residential Address</h5>
          </div>
          <div class="col-md-4">
            <label class="form-label">Street</label>
            <input type="text" class="form-control" name="txtStreet" value="<?php echo $resStreet; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Barangay</label>
            <input type="text" class="form-control" name="txtBrgy" value="<?php echo $resBrgy; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="txtCity" value="<?php echo $resCity; ?>" required>
          </div>

          <div class="col-12">
            <h5 class="mt-4">Permanent Address</h5>
          </div>
          <div class="col-md-4">
            <label class="form-label">Street</label>
            <input type="text" class="form-control" name="pertxtStreet" value="<?php echo $perStreet; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Barangay</label>
            <input type="text" class="form-control" name="pertxtBrgy" value="<?php echo $perBrgy; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="pertxtCity" value="<?php echo $perCity; ?>" required>
          </div>

          <div class="col-md-4">
            <label class="form-label">Telephone</label>
            <input type="text" class="form-control" name="txtTel" value="<?php echo $telephone; ?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Mobile</label>
            <input type="text" class="form-control" name="txtMobile" value="<?php echo $mobile; ?>" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="txtEmail" value="<?php echo $email; ?>" required>
          </div>

          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success px-5">Save Information</button>
          </div>
        </form>
      </div>
    </div>

    <!-- RECORDS -->
    <div class="card shadow mt-5">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0">PDS Records</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-secondary">
            <tr>
              <th>No</th>
              <th>Full Name</th>
              <th>Date of Birth</th>
              <th>Sex</th>
              <th>Civil Status</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM pds_persons";
            if ($rs = $conn->query($sql)) {
              if ($rs->num_rows > 0) {
                $cnt = 1;
                while ($row = $rs->fetch_assoc()) {
                  echo "<tr>"
                    . "<td>" . $cnt . "</td>"
                    . "<td>" . $row['pds_surname'] . ", " . $row['pds_first_name'] . " " . $row['pds_middle_name'] . "</td>"
                    . "<td>" . $row['pds_date_of_birth'] . "</td>"
                    . "<td>" . $row['pds_sex'] . "</td>"
                    . "<td>" . $row['pds_civil_status'] . "</td>"
                    . "<td>" . $row['pds_mobile'] . "<br>" . $row['pds_email'] . "</td>"
                    . "<td>
                        <a href='biyu.php?token=" . $row['pds_person_id'] . "' class='btn btn-warning btn-sm'>View</a> 
                        <a href='pds.php?token=" . $row['pds_person_id'] . "' class='btn btn-primary btn-sm'>Edit</a> 
                        <a href='delete.php?token=" . $row['pds_person_id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                      </td>"
                    . "</tr>";
                  $cnt++;
                }
              } else {
                echo "<tr><td colspan='7' class='text-center'>No Record(s) Found!</td></tr>";
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>