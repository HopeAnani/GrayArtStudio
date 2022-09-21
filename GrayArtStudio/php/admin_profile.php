<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$qryi = "select * from Admin where ID=0;";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);
$email = "Email";
$instagram = "Instagram";
$facebook = "Facebook";
$twitter = "Twitter";
$linkedin = "Linkedin";
$telegram = "Telegram";
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_profile.css">
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <title>Personal profile</title>
</head>

<body>
    <section class="m-5">
        <div class="container border p-3 ps-5" id="main_div">
            <div class="picture-container">
                <div class="picture">
                    <img src="../icons/camera-solid.svg" class="picture-src" id="profilePicturePreview" title="">
                    <input type="file" id="profile-picture">
                </div>
            </div>
            <form action="profile_handler.php?" method='post'>
                <label for="Instagram">
                    <p>Instagram:</p>
                </label><br>
                <input class="form-control form-control-sm" type="text" id="Instagram" name="Instagram" value="<?php if(!empty($results)){print $results[$instagram];} else{print "";}?>">
                <br>
                <label for="Telegram">
                    <p>Telegram:</p>
                </label><br>
                <input class="form-control form-control-sm" type="text" id="Telegram" name="Telegram" value="<?php if(!empty($results)){print $results[$telegram];} else{print "";}?>">
                <br>
                <label for="Linkedin">
                    <p>Linkedin:</p>
                </label><br>
                <input class="form-control form-control-sm" type="text" id="Linkedin" name="Linkedin" value="<?php if(!empty($results)){print $results[$linkedin];} else{print "";}?>">
                <br>
                <label for="Twitter">
                    <p>Twitter:</p>
                </label><br>
                <input class="form-control form-control-sm" type="text" id="Twitter" name="Twitter" value="<?php if(!empty($results)){print $results[$twitter];} else{print "";}?>">
                <br>
                <label for="Facebook">
                    <p>Facebook:</p>
                </label><br>
                <input class="form-control form-control-sm" type="text" id="Facebook" name="Facebook" value="<?php if(!empty($results)){print $results[$facebook];} else{print "";}?>">
                <br>
                <label for="Email">
                    <p>Email:</p>
                </label><br>
                <input class="form-control form-control-sm" type="email" id="Email" name="Email" value="<?php if(!empty($results)){print $results[$email];} else{print "";}?>">
                <br>
                <div class="row justify-content-end">
                <div class="col-lg-3">
                    <button class="btn btn-dark">Confirm</button>
                </div>
                <br>
                <br>
                <br>
                <div class="col-lg-3">
                    <button class="btn btn-dark">Cancel</button>
                </div>
            </div>
            </form>

        </div>
    </section>
</body>

</html>