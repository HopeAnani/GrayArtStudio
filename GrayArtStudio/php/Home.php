<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GrayArt";

$connection = mysqli_connect($host,$user,$password,$db) or die("could not connnect to db!");

$qryi = "select * from imageUpload;";
$queryi = mysqli_query($connection, $qryi);

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" href="../css/art.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,100&display=swap" rel="stylesheet">
	<script src="../javascript/home.js"></script>
	<title>Homepage</title>
</head>

<body>
	<!-- onload = "onceloaded()" -->
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</label>
		<label class="logo"><img src="../image/logo_with_no_background.png" id="logoimage"></label>
		<ul class="navlist">
			<li><a href="Home.php">Home</a></li>
			<li><a href="#ToArt">Art</a></li>
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
			<li><a href="artist_statement.php"><i class="fas fa-file" title="Artist Statement"></i><b>Artist
						Statement</b></a>
				<hr align="center">
			</li>
			<li><a href="../html/about.html"><i class="fas fa-info" title="About"></i><b>About</b></a></li>
		</ul>
	</div>
	<div class="slider">

    </div>
    <div>
    <hr id="ToArt">
    	
    </div>
	
	<div id="grid-container">
		
            <?php
			$im = "image";
			$ti = "Title";
			$si = "Size";
			$pi = "Price";
			$ye = "Year";
			$id = "ID";
 
					while($results = mysqli_fetch_array($queryi)){
                    print "<div class='imagecontent1'>";
                    print "<div class='imagecontainers1'>";
                    print "<a href='selection_page.php?id=$results[$id]'><img src='../MikiArt/$results[$im]' alt='artwork' class='artworkimage'></a>";
                    print "</div>
                    <p><b>Title:</b> $results[$ti]</p>
                    <p><b>Size: </b> $results[$si]</p>
                    <p><b>Price:</b> $ $results[$pi]</p>
                    <p><b> $results[$ye]</b></p> </div>";
					}
        
            ?>
			
            
		

	</div>
	
</body>

</html>