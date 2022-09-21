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
	<link rel="stylesheet" type="text/css" href="../css/AdminHome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,100&display=swap" rel="stylesheet">
	<script src="../javascript/home.js"></script>
	<title>AdminHomepage</title>
</head>

<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</label>
		<label class="logo"><img src="../image/logo_with_no_background.png" id="logoimage"></label>
		<ul class="navlist">
			<li><a href="AdminHome.php">Home</a></li>
			<li><a href="#">Art</a></li>
			<li><a href="../html/Edit_exhibitions.html">Exhibitions</a></li>
			<li><a href="../html/admin_profile.html">Contacts</a></li>
			<li><a href="../html/admin_upload.html">Upload New</a></li> 
			<li class="hide"><a href="Autobiography_Upload.php">Autobiography</a></li>
            <li class="hide"><a href="Artist_statement_upload.php">Art Statement</a></li>
            <li class="hide"><a href="#">About</a></li>
		</ul>
	</nav>
	<input type="checkbox" id="sidecheck">

	<div class="sidebar">
		<label for="sidecheck">
			<span class="fas fa-times" id="times" onclick="contentMove('l')"></span>
			<span class="fa fa-bars" aria-hidden="true" id="bars" onclick="contentMove('r')"></span>
		</label>
		<ul class="sidelist">
			<li><a href="Autobiography_Upload.php"><i class="fas fa-user" title="Autobiography"></i><b>Autobiography</b></a>
				<hr align="center">
			</li>
			<li><a href="Artist_statement_upload.php"><i class="fas fa-file" title="Artist Statement"></i><b>Artist Statement</b></a>
				<hr align="center">
			</li>
			<li><a href="#"><i class="fas fa-info" title="About"></i><b>About</b></a></li>
		</ul>
	</div>
	
	<div id="grid-container">

	<?php
			$im = "image";
			$id = "ID";
 
					while($results = mysqli_fetch_array($queryi)){
                    print "<div class='imagecontent1'>";
                    print "<div class='imagecontainers1'>";
                    print "<a href='edit_admin_upload.php?id=$results[$id]'><img src='../MikiArt/$results[$im]' alt='artwork' class='artworkimage'></a></div><p>
					<a href='../php/edit_admin_upload.php?id=$results[$id]'><button class='edit'>Edit</button></a></p>";
                    print "</div>";
					
					}
        
            ?>
	
	</div>

</body>

</html>