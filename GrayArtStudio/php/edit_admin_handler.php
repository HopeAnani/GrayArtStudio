<?php

$host = "localhost";
	$user = "root";
	$password = "";
	$db = "GrayArt";

	$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");
    


                $i = $_POST['file'];
                $t = $_POST['title'];
                $s = $_POST['size'];
                $m = $_POST['medium'];
                $d = $_POST['description'];
                $p = $_POST['price'];
                $y = $_POST['year'];
                $id = $_POST['id'];
                $im = "image";
                $qryi = "select * from imageUpload where ID = '$id';";
                $queryi = mysqli_query($connection, $qryi);
                $results = mysqli_fetch_array($queryi);
                

                if(isset($_POST['submit'])){
                $qry = "INSERT INTO imageUpload (Title,Size,Medium,Description,Price,Year,image) VALUES ('$t','$s','$m','$d','$p','$y','$i');";
                $deletequ = "DELETE FROM imageUpload where ID=$id;";
                mysqli_query($connection, $qry);
                mysqli_query($connection, $deletequ);}

                if(isset($_POST['delete'])){
                    $deletequ = "DELETE FROM imageUpload where ID=$id;";
                    mysqli_query($connection, $deletequ);
                    unlink("../MikiArt/$results[$im]");
                    header('location: AdminHome.php');
                }
                mysqli_close($connection); 
                header("location: AdminHome.php");       

?>
