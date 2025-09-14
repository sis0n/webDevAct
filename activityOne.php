<?php
  // red yellow orange blue green
  function RandomColors(){
    echo "<table>";

    for($row = 0; $row < 10; $row++) {
      echo "<tr>";
      for($col = 0; $col < 10; $col++){
        $randomCols = rand(1,5);
        $color = '';

        switch ($randomCols) {
          case 1:
            $color = "red";
            break;
          case 2:
            $color = "yellow";
            break;
          case 3:
            $color = "orange";
            break;
          case 4:
            $color = "blue";
            break;
          case 5:
            $color = "green";
            break;
        }
        echo "<td class='$color'></td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    return $color;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activity 2</title>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      table {
        box-shadow: 0 0 50px rgba(0,0,0,0.2);
      }

      td {
        width: 50px;
        height: 50px;
        border: 1px solid black;
      }
      .red {
         background-color: red;
       }
       .green {
         background-color: green;
       }
       .blue {
         background-color: blue;
       }
       .orange {
         background-color: orange;
       }
       .yellow {
         background-color: yellow;
       }
    </style>
  </head>
  <body>
    <?php
      RandomColors();
    ?>
  </body>
</html>