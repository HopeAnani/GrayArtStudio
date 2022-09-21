<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$id = $_GET['id'];

$qryi = "select * from imageUpload where ID = '$id';";
$queryi = mysqli_query($connection, $qryi);

$results = mysqli_fetch_array($queryi);
$im = "image";
$ti = "Title";
$si = "Size";
$pi = "Price";
$ye = "Year";
$des = "Description";
$mi = "Medium";


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit_admin_upload.css">
    <title>Upload Page</title>
</head>

<body>
    <div>
        <div class="row">
            <div class="column">
            <?php
               print "<form action='../php/edit_admin_handler.php' method='POST' enctype='multipart/form-data'>
                     <label for='price'>
                        <h3>Price of the art work:</h3>
                    </label><br>
                    <input class='floatingTextarea' placeholder='$ **.**' value='$results[$pi]' type='text' id='price' name='price'>
                    <label for='date'>
                        <h3>Year:</h3>
                    </label><br>
                    <input class='floatingTextarea' placeholder='2022' value='$results[$ye]' type='number' id='price' name='year'>
                    <h3>Description about the art work:</h3>
                    <textarea class='floatingTextarea' name='description'>$results[$des]</textarea>

            </div>";
            
            print "<div class='column'>
                <label for='title'>
                    <h3>Title of the art work:</h3>
                </label><br>
                <input class='floatingTextarea' type='text' value='$results[$ti]' id='title' name='title'>
                <label for='size'>
                    <h3>Size</h3>
                </label>
                <input class='floatingTextarea' name='size' value='$results[$si]' type='text' name='size'>
                <label for='medium'>
                    <h3>Medium</h3>
                </label>
                <input class='floatingTextarea' name='medium' value='$results[$mi]' type='text'>
                <input type='text' hidden name='file' value='$results[$im]'>
                <input type='text' hidden name='id' value='$id'>


            </div>
        </div>
    </div>
    <div>";
    ?>
        <input type='submit' class='btn'  value='delete' name='delete' id='delete'>
        <input type='submit' id='btn1' class='btn' value='Submit' name='submit'>
        <input type='reset' id='btn2' class='btn' value='Reset' name='reset'>
        </form>
    </div>

   
</body>

</html>