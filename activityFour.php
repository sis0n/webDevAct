<?php
function Color($value, $allRandNums) {
  $found = false;
  for($i = 0; $i < count($allRandNums); $i++) {
    if($allRandNums[$i] == $value) {
      $found = true;
      break;
    }
  }
  $color = $found ? "red" : "white";
  return '<td><div class="box" style="background:' . $color . '">' . $value . '</div></td>';
}

$gridNum = isset($_POST['gridNum']) ? $_POST['gridNum'] : [];
$allRandNums = isset($_POST['allRandNums']) ? $_POST['allRandNums'] : [];

if(!is_array($gridNum)) $gridNum = [$gridNum];
if(!is_array($allRandNums)) $allRandNums = [$allRandNums];

$randNum = rand(0, 9);
$allRandNums[count($allRandNums)] = $randNum;

if(count($gridNum) != 100) {
  $gridNum = [];
  $initNum = [];

  for($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
      $initNum[$i * 10 + $j] = $j;
    }
  }
  for($i = 0; $i < 100; $i++) {
    $randIndex = rand(0, 99);
    $temp = $initNum[$i];
    $initNum[$i] = $initNum[$randIndex];
    $initNum[$randIndex] = $temp;
  }

  for($i = 0; $i < 100; $i++) {
    $gridNum[$i] = $initNum[$i];
  }
} else {
  for($i = 0; $i < 100; $i++) {
    $current = $gridNum[$i];
    $isColored = false;

    for($j = 0; $j < count($allRandNums); $j++) {
      if($current == $allRandNums[$j]) {
        $isColored = true;
        break;
      }
    }

    if(!$isColored) {
      $newNum = -1;
      $foundValid = false;
      $attempts = 0;
      while(!$foundValid && $attempts < 100) {
        $candidate = rand(0, 9);
        $alreadyUsed = false;
        for ($k = 0; $k < count($allRandNums); $k++) {
          if ($candidate == $allRandNums[$k]) {
            $alreadyUsed = true;
            break;
          }
        }
        if (!$alreadyUsed) {
          $newNum = $candidate;
          $foundValid = true;
        }
        $attempts++;
      }
      if ($newNum != -1) {
        $gridNum[$i] = $newNum;
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Activity 3</title>
  <style>
    .box {
      height: 25px;
      width: 35px;
      border: solid;
      border-radius: 5px;
      text-align: center;
      padding-top: 10px;
    }
    .current-rand {
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<center>
  <form method="POST">
    <div class="current-rand">
      <?php echo 'Current Rand Number: ' . $randNum; ?>
    </div>
    <table>
      <?php
      for($r = 0; $r < 10; $r++) {
        echo '<tr>';
        for($c = 0; $c < 10; $c++) {
          $index = $r * 10 + $c;
          echo Color($gridNum[$index], $allRandNums);
        }
        echo '</tr>';
      }

      for($i = 0; $i < count($gridNum); $i++) {
        echo '<input type="hidden" name="gridNum[]" value="' . $gridNum[$i] . '">';
      }

      for($i = 0; $i < count($allRandNums); $i++) {
        echo '<input type="hidden" name="allRandNums[]" value="' . $allRandNums[$i] . '">';
      }
      ?>
    </table>
    <br>
    <input type="submit" name="btnSave" value="Submit">
  </form>
  <div>
    <h4>Previous Random Number(s):</h4>
    <?php
    if(count($allRandNums) > 0) {
      for($i = 0; $i < count($allRandNums); $i++) {
        echo $allRandNums[$i];
        if($i < count($allRandNums) - 1) echo ', ';
      }
    } else{
      echo "No previous matches yet.";
    }
    ?>
  </div>
</center>
</body>
</html>