<?php

$login = $_POST['Login'];
$Password = $_POST['Password'];
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Qualification = $_POST['Qualification'];
$Email = $_POST['Email'];
$UserRole = 1;
$Id_schedule = 1;
$ConsLink = $_POST['Link'];

$mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');


$mysql->query("INSERT INTO `User`(`Login`, `Password`, `Role`)
VALUES('$login', '$Password', '$UserRole')");
$mysql->close();


$mysql2 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
$lookupID = "SELECT Id_user FROM User WHERE Login = '$login'";
$result = mysqli_query($mysql2, $lookupID);
$row = mysqli_fetch_row($result);
$idUser = $row[0];
$mysql2->close();

$mysql3 = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');
$mysql3->query("INSERT INTO `Doctor`(`Surname`, `Name`, `Email`, `Qualification`, `Id_user`, `Id_schedule`,`Consultation_Link`)
VALUES('$Surname', '$Name', '$Email', '$Qualification', '$idUser', '$Id_schedule','$ConsLink')");
$mysql3->close();
echo '<script language="javascript">';
echo 'alert("Doctor successfully added!")';
echo '</script>';
echo '<script>location.replace("AdminProfile.php");</script>'; exit;
?>
