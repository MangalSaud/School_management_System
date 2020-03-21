<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsiv.css" rel="stylesheet">
	</head>
	<body background="images/body6.jpg">	
		<div class="wrapper">
		<?php
			 include("include/header.php")
		 ?>	
			
		<div class="add">
			<div class="searchbar">
				<form>
					<input type="text"><br>
					<input type="submit" value="Search">
				</form>
				</div>
				<?php
					include("include/sitemenu.php")
				?>
		
		</div>
		<div class="lsec">
			<h2>Welcome to Pall Pur High School</h2>
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28951.00123247946!2d91.6045831!3d24.9022398!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750e273eaaaaaab%3A0xf773556e4a6de0de!2spalpur%20high%20school!5e0!3m2!1sen!2sbd!4v1577968695956!5m2!1sen!2sbd" width="650" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
		
		</div>
		
		<?php
			include("include/footer.php")
		?>
		
		
		</div>
	</body>
</html>