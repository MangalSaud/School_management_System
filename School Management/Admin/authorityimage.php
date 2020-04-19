<?php
	session_start();

	if($_SESSION['username']==null){
			if($_SESSION['password']==null){
				header("Location: login.php");
			}			
		}
	include("classes/loginandlogout.php");
	use App\classes\AdminLogin;
	$adm=new AdminLogin();
	if(isset($_GET['logout'])){
		$adm->adminLogout();
	}


?>
<!DOCTYPE html>
<html>
<head>
<link href="stylelogin.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
	<?php
		include("include/header.php")
	?>
	<?php
		include("include/leftsidebar.php")
	?>
	
	<section class="post">
		<section class="postdiv">
				<h1 style="font-size:25px;">Update Authority page Post</h1>
				<form action="#">
				  <input type="text" name="post"><br>
				  <input type="submit" value="Delete">
				  <input type="submit" value="Edit">
				  <input type="submit" value="Post">
				</form> 
		</section>
		
	</section>
	<?php
	
		include("include/footer.php")
	
	?>
	</div>
</body>
</html>