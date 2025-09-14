<?php
$surname = $fname = $mname = $placeBirth = $sex = $civilStatus = 
$height = $weight = $bloodType = $gsis = $pagIbig = $philHealth = 
$sss = $tin = $agency = $citizenship = $resStreet = $resBrgy = 
$resCity = $perStreet = $perBrgy = $perCity = $telephone = $mobile = 
$email = "";
  if(isset($_POST['txtFname'])) {
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
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Activity Three</title>
  <style>
    body {
      background: #f5f7fa;
      margin: 0;
      padding: 0;
    }
    .container {
      margin-top: 40px;
    }
    table {
      width: 70%;
      background: #fff;
      /* box-shadow: 0px 4px 15px rgba(0,0,0,0.1); */
      border-radius: 8px;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    .table-header {
      background: #2c3e50;
      color: white;
      font-size: 22px;
      font-weight: bold;
      text-align: center;
      padding: 15px;
      border-radius: 8px 8px 0 0;
    }
    .table-subheader {
      background: #34495e;
      color: white;
      font-weight: bold;
      padding: 10px;
      text-align: left;
    }
    td {
      border: 1px solid #ddd;
      padding: 12px;
    }
    .label-cell {
      background: #ecf0f1;
      font-weight: bold;
      width: 220px;
    }
    .input-text {
      padding: 8px;
      width: 95%;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: 0.3s;
      font-size: 14px;
    }

    .btn-submit {
      background: #2980b9;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn-submit:hover {
      background: #1c5980;
    }
    .submit-row {
      text-align: center;
      background: #ecf0f1;
    }
  </style>
</head>
<body>
  <div class="container">
    <center>
      <form method="post">
        <table>
          <tr>
            <td colspan="3" class="table-header">PERSONAL DATA SHEET</td>
          </tr>
          <tr>
            <td colspan="3" class="table-subheader">I. PERSONAL INFORMATION</td>
          </tr>
          <tr>
            <td class="label-cell">SURNAME</td>
            <td colspan="2"><input class="input-text" name="txtSname" placeholder="Enter Surname" required></td>
          </tr>
          <tr>
            <td class="label-cell">FIRST NAME</td>
            <td colspan="2"><input class="input-text" name="txtFname" placeholder="Enter First Name" required></td>
          </tr>
          <tr>
            <td class="label-cell">MIDDLE NAME</td>
            <td colspan="2"><input class="input-text" name="txtMname" placeholder="Enter Middle Name"></td>
          </tr>
          <tr>
            <td class="label-cell">DATE OF BIRTH</td>
            <td colspan="2"><input type="date" class="input-text" name="txtdateBirth" placeholder="Enter Date of Birth" required></td>
          </tr>
          <tr>
            <td class="label-cell">PLACE OF BIRTH</td>
            <td colspan="2"><input class="input-text" name="txtplaceBirth" placeholder="Enter Place of Birth" required></td>
          </tr>
          <tr>
            <td class="label-cell">SEX</td>
            <td colspan="2"><input class="input-text" name="txtSex" placeholder="Enter Sex"></td>
          </tr>
          <tr>
            <td class="label-cell">CIVIL STATUS</td>
            <td colspan="2"><input class="input-text" name="txtCivilStatus" placeholder="Enter Civil Status"></td>
          </tr>
          <tr>
            <td class="label-cell">HEIGHT (m)</td>
            <td colspan="2"><input class="input-text" name="txtHeight" placeholder="Enter Height" required></td>
          </tr>
          <tr>
            <td class="label-cell">WEIGHT (kg)</td>
            <td colspan="2"><input class="input-text" name="txtWeight" placeholder="Enter Weight" required></td>
          </tr>
          <tr>
            <td class="label-cell">BLOOD TYPE</td>
            <td colspan="2"><input class="input-text" name="txtBloodType" placeholder="Enter Blood Type"></td>
          </tr>
          <tr>
            <td class="label-cell">GSIS ID NO.</td>
            <td colspan="2"><input class="input-text" name="txtGsis" placeholder="Enter GSIS ID NO."></td>
          </tr>
          <tr>
            <td class="label-cell">PAG-IBIG ID NO.</td>
            <td colspan="2"><input class="input-text" name="txtPagIbig" placeholder="Enter PAG-IBIG NO."></td>
          </tr>
          <tr>
            <td class="label-cell">PHILHEALTH NO.</td>
            <td colspan="2"><input class="input-text" name="txtPhilHealth" placeholder="Enter PHILHEALTH NO."></td>
          </tr>
          <tr>
            <td class="label-cell">SSS NO.</td>
            <td colspan="2"><input class="input-text" name="txtSss" placeholder="Enter SSS NO."></td>
          </tr>
          <tr>
            <td class="label-cell">TIN NO.</td>
            <td colspan="2"><input class="input-text" name="txtTin" placeholder="Enter TIN NO."></td>
          </tr>
          <tr>
            <td class="label-cell">AGENCY EMPLOYEE NO.</td>
            <td colspan="2"><input class="input-text" name="txtAgency" placeholder="Enter AGENCTY EMPLOYEE NO."></td>
          </tr>
          <tr>
            <td class="label-cell">Citizenship</td>
            <td colspan="2"><input class="input-text" name="txtCit" placeholder="Enter Citizenship"></td>
          </tr>
          <tr>
            <td colspan="3" class="table-subheader">RESIDENTIAL ADDRESS</td>
          </tr>
          <tr>
            <td class="label-cell">Street</td>
            <td colspan="2"><input class="input-text" name="txtStreet" placeholder="Enter Street"></td>
          </tr>
          <tr>
            <td class="label-cell">Barangay</td>
            <td colspan="2"><input class="input-text" name="txtBrgy" placeholder="Enter Barangay"></td>
          </tr>
          <tr>
            <td class="label-cell">City</td>
            <td colspan="2"><input class="input-text" name="txtCity" placeholder="Enter City"></td>
          </tr>
          <tr>
            <td colspan="3" class="table-subheader">PERMANENT ADDRESS</td>
          </tr>
          <tr>
            <td class="label-cell">Street</td>
            <td colspan="2"><input class="input-text" name="pertxtStreet" placeholder="Enter Street"></td>
          </tr>
          <tr>
            <td class="label-cell">Barangay</td>
            <td colspan="2"><input class="input-text" name="pertxtBrgy" placeholder="Enter Barangay"></td>
          </tr>
          <tr>
            <td class="label-cell">City</td>
            <td colspan="2"><input class="input-text" name="pertxtCity" placeholder="Enter City"></td>
          </tr>
          <tr>
            <td class="label-cell">TELEPHONE NO.</td>
            <td colspan="2"><input class="input-text" name="txtTel" placeholder="Enter Telephone NO."></td>
          </tr>
          <tr>
            <td class="label-cell">MOBILE NO.</td>
            <td colspan="2"><input class="input-text" name="txtMobile" placeholder="Enter Mobile NO."></td>
          </tr>
          <tr>
            <td class="label-cell">EMAIL ADDRESS</td>
            <td colspan="2"><input class="input-text" name="txtEmail" placeholder="Enter Email Address."></td>
          </tr>
          <tr>
            <td colspan="3" class="submit-row">
              <input class="btn-submit" type="submit" name="btnSave" value="Save Information">
            </td>
          </tr>
        </table>
      </form>
    </center>
  </div>
</body>
</html>