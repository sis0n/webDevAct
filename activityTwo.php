<?php
  function Color($random, $randNum){
    $color = '';

    if($random == $randNum){
      $color = 'red';
    } else {
      $color = 'white';
    }
    return '<td> <div class = "box" style="background:'. $color . '">' . $random . '</div></td>';
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr"

 <head>
   <meta charset="utf-8">
   <title>Activity 3</title>
   <style>
   .box{
     height: 25px;
     width: 35px;
     border: solid;
     border-radius: 5px;
     text-align: center;
     padding-top: 10px;
   }
   </style>
 </head>
   <body>
     <center>
       <table>
        <?php
        $randNum = rand(0,9);
        $counter = 0;

        echo '<div class="random-number">'. $randNum .'</div>';
        for($row = 0; $row < 10; $row++){
          echo '<tr>';
          for($col = 0; $col < 10; $col++){
            $n = rand(0,9);
            if($randNum == $n) {
              $counter++;
            }
            echo Color($n, $randNum);
          }
          echo '</tr>';
        }

        ?>
</table>
<?php
  echo 'There are ' . $counter . ' boxes that have the value of ' . $randNum;
?>
</center>
</body>