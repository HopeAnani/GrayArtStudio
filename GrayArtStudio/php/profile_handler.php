<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$email = $_POST["Email"];
$instagram =  $_POST["Instagram"];
$facebook =  $_POST["Facebook"];
$twitter =  $_POST["Twitter"];
$linkedin =  $_POST["Linkedin"];
$telegram =  $_POST["Telegram"];

$qryi = " SELECT COUNT(*) FROM Admin";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);

if($results[0] == 0)
{
    $qryi = "INSERT INTO Admin (Instagram,Facebook,Twitter,Linkedin,Telegram,Email) values ('$instagram','$facebook','$twitter','$linkedin','$telegram','$email');";
    $queryi = mysqli_query($connection, $qryi);
}
else
{
    $qryi = "UPDATE Admin set Instagram = '$instagram', Facebook = '$facebook', Twitter = '$twitter', Linkedin = '$linkedin', Telegram = '$telegram', Email = '$email' where ID= 0;";
    $queryi = mysqli_query($connection, $qryi);
}

mysqli_close($connection); 
header("location: AdminHome.php"); 
?>