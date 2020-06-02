<?php
$date_cons0=$_POST['dateapp'];
$date_cons= (date('d-m-Y',strtotime($date_cons0)));

$Time_start=$_POST['timeapp'];
$Time_end=date('h:i',strtotime($Time_start . ' +30 minutes'));;
$Id_doctor=$_POST['doctor'];
$Id_doctor+=1;
$Id_doctor-=1;
$Id_schedule=1; //for appoinment 1 and fro cosnultation 2 ???
$Type="Online";

$dateavailable=true;




if ($dateavailable==true){
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

    $mysql1 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
    $lookupDI = "SELECT Id_diagnosis FROM Test WHERE  Id_patient ='$Id_patient' ";
    $result1 = mysqli_query($mysql1, $lookupDI);
    $row1 = mysqli_fetch_row($result1);
    $Id_diagnosis = $row1[0];
    $mysql1->close();




    $mysql2 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
    $mysql2->query("INSERT INTO `Consultation`(`Id_doctor`, `Id_patient`, `Id_diagnosis`,`date_cons`,`Id_schedule`,`Time_start`,`Time_end`,`Type`)
    VALUES('$Id_doctor', '$Id_patient', '$Id_diagnosis','$date_cons','$Id_schedule','$Time_start','$Time_end','$Type')");
    $mysql2->close();
    echo "Appoinment was Successfully added";
    echo '<script>location.replace("https://tridimensional-laun.000webhostapp.com/Calendar.php");</script>'; exit;

  }
  else{
      //echo "время не доступно, выберите другое!";
  }


 ?>
