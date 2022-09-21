<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$qryi = "select * from Admin;";
$queryi = mysqli_query($connection, $qryi);
$results = mysqli_fetch_array($queryi);
$AS = "ArtStatement";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/artist_statement_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,100&display=swap" rel="stylesheet">
	<script src="../javascript/artist_statement.js"></script>
	<title>Artist Statement</title>
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

	<div id="AS">
	<center><h1>Artist Statement</h1></center>
	<div><?php if(!empty($results))
				print "$results[$AS]";
			else
				print "<b>NO $AS uploded</b>";
				 ?></div>
	<!-- <p>The majority of the artworks are directly drawn from my sketchbook. Some of the sketches are based on life, while others are based on photos and videos. The photographs and videos are moments form Addis Ababa's streets, local Tej houses, and cafe's</p>
	<p>I depict the figures and make an estimation about their thoughts and emotions. However, unless I know the individual or have previously communicated with them, the estimation I make is based on my own experiences. I mostly utilize another person's portrait as a subject and use it to reflect and express my beliefs on our existence in the universe. Through them, I ask questions and express my thoughts on political and social matters.</p>
	<p>I use this as a form of theraph form time to time to help me forget and escape from all the negative things in the world. I try to imagine that every painting I create listens to my brush strokes and feels my agony or delight. So I believe I am speaking to the portraits without speaking a word and have a deeper connection with my works when I am painting.</p> -->

	</div> 


</body>
</html>