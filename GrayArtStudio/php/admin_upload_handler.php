<?php

$host = "localhost";
	$user = "root";
	$password = "";
	$db = "GrayArt";

	$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");



if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name']; 
    $fileTmpName = $_FILES['file']['tmp_name']; 
    $fileSize = $_FILES['file']['size']; 
    $fileError = $_FILES['file']['error']; 
    $fileType = $_FILES['file']['type']; 
    $fileExt = explode('.', $fileName );
    $fileActalExt = strtolower(end($fileExt));

    $allowed= array('jpg', 'jpeg', 'png', 'AI', 'CDR', 'XCF', 'PSD', 'tif', 'tiff', 'bmp', 'eps' );
    if(in_array($fileActalExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 20971520){
                $fileNameNew = uniqid('', true).".".$fileActalExt;
                $fileDestination = '../MikiArt/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                $t = $_POST['title'];
                $s = $_POST['size'];
                $m = $_POST['medium'];
                $d = $_POST['description'];
                $p = $_POST['price'];
                $y = $_POST['year'];
                $qry = "INSERT INTO imageUpload (Title,Size,Medium,Description,Price,Year,image) VALUES ('$t','$s','$m','$d','$p','$y','$fileNameNew');";
                mysqli_query($connection, $qry);
                mysqli_close($connection); 
                header("location: AdminHome.php");       
            }else{
                echo "Your file is too big!";
                sleep(5);
                header("location: AdminHome.php");       
            }
        }else{
            echo "There was an error uploading this file!"; 
            sleep(5);
            header("location: AdminHome.php"); 
        }

    } else{

        echo "YOU cannot upload files of this type!";
        sleep(5);
        header("location: AdminHome.php");  
    }
    
}
?>