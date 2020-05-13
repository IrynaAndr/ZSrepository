<?php
  $gender = $_POST['gender'];
  $Age = $_POST['Age'];
  $Answer3 = $_POST['3'];
  $Answer4 = $_POST['4'];
  $Answer5 = $_POST['5'];
  $Answer6 = $_POST['6'];
  $Answer7 = $_POST['7'];
  $Answer8 = $_POST['8'];
  $Answer9 = $_POST['9'];
  $Answer10 = $_POST['10'];
  $Answer11 = $_POST['11'];
  //echo "gender = $gender Age = $Age Otvet3 = $Answer3 Otvet4 = $Answer4 Otvet5 = $Answer5 Otvet6 = $Answer6 Otvet7 = $Answer7 Otvet8 = $Answer8 Otvet9 = $Answer9 Otvet10 = $Answer10 Otvet11 = $Answer11 ";

  $All = $Answer3+$Answer4+$Answer5+$Answer6+$Answer7+$Answer8+$Answer9+$Answer10+$Answer11;
  if ($Answer7 >= 2 && $Answer8 == 1 && $Answer3 <= 1 && $gender == "male" && $Age >= 20 && $Age <= 40) {
    echo "U vas miokardit(((";
  }else {
    echo "Potom dodelaiu)))";
  }
?>
