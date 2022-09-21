<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");
$id = $_GET["id"];

$qryi = "select * from imageUpload where ID=$id;";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/selection_page.css">
    <title>Gray Art Studio</title>
</head>

<body>
    <div id="div">
        <div class="row">
            <div class="column">
                <?php
                 $im = "image";
                 $ti = "Title";
                 $si = "Size";
                 $pi = "Price";
                 $ye = "Year";
                 $mi = "Medium";
                 $des = "Description";

                print "<div class='cont'>
                            <img id='imageclass' src='../MikiArt/$results[$im]' alt='image' sizes='250x400'
                        srcset=''>
                        </div>
                        </div>
                        <div id='column' class='column'>
                            <div class='box'>";
                    

                   

                    print "<h5 class='inline'> Title: </h5>
                    <p>$results[$ti]</p></br>
                    
                    <h5 class='inline'>Size: </h5>
                    <p>$results[$si]</p></br>
                    
                    <h5 class='inline'>Medium: </h5>
                    <p>$results[$mi]</p>
                    ";

                    if(isset($results[$des]) == 1){
                    print "<h5>Description: </h5>
                    <p>$results[$des]</p></br>
                    ";} 
                    
                    print "
                    <h5 class='inline'> Price: </h5>
                    <p>$$results[$pi]</p></br>
                        
                    <h5 class='inline'>
                        <p>$results[$ye]</p>
                    </h5>

                    ";?>
                    <div>
                        <a href="mailto:ananisamuelhope@gmail.com"><button type="button" class="btn" id="buy">Buy</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>