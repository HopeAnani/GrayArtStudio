<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$qryi = "select Autobiography from Admin;";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);
$Bio = "Autobiography";

?>


<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/autobiography.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,100&display=swap" rel="stylesheet">
    <script src="../javascript/home.js"></script>
	<script src="../javascript/autobiography.js"></script>
    <title>Autobiography</title>
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>
        <label class="logo"><img src="../image/logo_with_no_background.png" id="logoimage"></label>
        <ul class="navlist">
            <li><a href="Home.php">Home</a></li>
            <li><a href="Home.php #ToArt">Art</a></li>
            <li><a href="Exhibitions.php">Exhibitions</a></li>
            <li><a href="Contact.php">Contacts</a></li>
            <li class="hide"><a href="Biography.php">Autobiography</a></li>
            <li class="hide"><a href="artist_statement.php">Art Statement</a></li>
            <li class="hide"><a href="../html/about.html">About</a></li> 
        </ul>
    </nav>
    <input type="checkbox" id="sidecheck">

    <div class="sidebar">
        <label for="sidecheck">
            <span class="fas fa-times" id="times" onclick="contentMove('l')"></span>
            <span class="fa fa-bars" aria-hidden="true" id="bars" onclick="contentMove('r')"></span>
        </label>
        <ul class="sidelist">
            <li><a href="Biography.php"><i class="fas fa-user" title="Autobiography"></i><b>Autobiography</b></a>
                <hr align="center">
            </li>
            <li><a href="artist_statement.php"><i class="fas fa-file" title="Artist Statement"></i><b>Art Statement</b></a>
                <hr align="center">
            </li>
            <li><a href="../html/about.html"><i class="fas fa-info" title="About"></i><b>About</b></a></li>
        </ul>
    </div>

	<div>
        <div class="row">
            <div class="conatiner" id="container1">
                <div id="about">
                    <h2>Autobiography</h2>
					<?php if(!empty($results))
						print "$results[$Bio]";
					else
						print "<b>NO $Bio uploded</b>";
				 		?>
                    <!-- Mikiyas Sintayehu was born in Addis Ababa, Ethiopia in 1998. He had recieved a diploma in fine arts ( Graphics department ) from Entoto Polly Technique college in Addis Ababa. He graduated in 2018 and currently working as full time studio artist. Mikiyas Sintayehu was born in Addis Ababa, Ethiopia in 1998. He had recieved a diploma in fine arts ( Graphics department ) from Entoto Polly Technique college in Addis Ababa. He graduated in 2018 and currently working as full time studio artist</div> -->
            	</div>
			</div>
            <div class="container">
                <img id="image" src="../image/Miki.jpg" alt="">
            </div>
        </div>
    </div>
	

	
</body> 
</html>