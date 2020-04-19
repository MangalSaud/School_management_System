
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
	
		<?php include("include/header.php") ?>

	
		<?php include("include/leftsidebar.php") ?>
	
	<section class="post">
		<h1 style="font-size:30px; padding-top:15px;">Welcome To Admin Panel</h1>
		<img src="images/school.jpg">
		
	</section>
	
		<?php include("include/footer.php") ?>
	
	
	</div>
</body>
</html>
