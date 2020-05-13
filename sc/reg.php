<?php

$login = $_POST['Login'];
$Password = $_POST['Password'];
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Date = $_POST['Date'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$UserRole = 0;




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
$mysql3->query("INSERT INTO `Patient`(`Surname`, `Name`, `DOB`,`Address`, `Email`, `Id_user`)
VALUES('$Surname', '$Name', '$Date', '$Address','$Email','$idUser')");
$mysql3->close();

header('Location: /');
?>
