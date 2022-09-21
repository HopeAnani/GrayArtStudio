<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$type = $_GET["type"];
$Vara = $_POST["Variable"];

$qryi = " SELECT COUNT(*) FROM Admin";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);

if($results[0] == 0)
{
    $qryi = "INSERT INTO Admin ($type) values ('$Vara');";
    $queryi = mysqli_query($connection, $qryi);
}
else
{
    $qryi = "UPDATE Admin set $type = '$Vara' where ID= 0;";
    $queryi = mysqli_query($connection, $qryi);
}

mysqli_close($connection); 
header("location: AdminHome.php"); 
?>