<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$qryi = "select * from Admin where ID=0;";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);
$AS = "ArtStatement";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Artist_statement_upload.css">
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <title>Upload art statement</title>
</head>

<body>
    <section class="m-5">
        <div class="container">
        <form action="AdminInfo_handler.php?type=ArtStatement" method='post'>
            <div class="row">
                <div class="col-lg-4">
                    <h4>Post art work statement</h4>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-floating">
                        <textarea class="form-control border" id="floatingTextarea"
                            style="height: 350px" name='Variable'><?php 
                                                                        if(!empty($results))
                                                                        {
                                                                            print $results[$AS];
                                                                        }
                                                                        ?></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <button class="btn" id="post">Post</button>
                <button class="btn" id="cancel">Cancel</button>
            </div>
        </form>
        </div>
    </section>

</body>

</html>