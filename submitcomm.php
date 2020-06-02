<?php

$IMark=$_POST['Mark'];
$Ifeedback=$_POST['Feedback'];
$IMark+=1;
$IMark-=1;
$mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');

  $lookupID = "SELECT Id_user FROM User WHERE  Login ='". $_COOKIE['userL']."'";
  $result = mysqli_query($mysql, $lookupID);
  $row = mysqli_fetch_row($result);
  $Id_user = $row[0];
  $mysql->close();

  $mysql2 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');

    $lookupID = "SELECT Id_patient FROM Patient WHERE  Id_User ='$Id_user'";
    $result = mysqli_query($mysql2, $lookupID);
    $row = mysqli_fetch_row($result);
    $Id_patient = $row[0];
    $mysql2->close();

    $mysql3 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
       $mysql3->query("INSERT INTO `Feedback`(`Id_patient`, `Feedback`, `Mark`)
       VALUES('$Id_patient', '$Ifeedback', '$IMark')");
       $mysql3->close();

?>
