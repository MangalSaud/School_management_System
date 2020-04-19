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
		<section class="titlepostdiv">
				<h1>Update Copyright Text</h1><br>
				<form action="#">
				  <input type="text" name="post" placeholder="Enter Copyright Text..."><br>
				  <input type="submit" value="Update">
				</form> 
		</section>
		
	</section>
	<?php
	
		include("include/footer.php")
	
	?>
	</div>
</body>
</html>