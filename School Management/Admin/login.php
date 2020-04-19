<?php
			session_start();

			if(isset($_SESSION['username'])){
				if(isset($_SESSION['password'])){
					header("Location: index.php");
				}
				
			}


			include("classes/loginandlogout.php");
			use App\classes\AdminLogin;
			
			$admin=new AdminLogin();

			$massage='';
			if(isset($_POST['btn'])){

			$massage=$admin->adminLogin($_POST);
			}
	?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet"  href="stylelogin.css" media="screen" />
</head>
<body>
<div class="wrapper">
<section class="header">
		<h1>Admin Area</h1>
</section>
<div class="container">
	<div class="login_content">
		<form action="" method="post">
			<h1>Admin Login</h1><br>
			<div class="un">
				<input type="text"  name="username" placeholder="Username"  />
			</div>
			<div class="un2">
				<input type="password" placeholder="Password" required="" name="password"/><br><br>
				<span style="color:red;font-size:25px;"><?php echo $massage; ?></span>
			</div ><br>
			<div class="lon">
				<input type="submit" value="Log in" name="btn"/>
			</div>
		</form>
	</div>
</div>
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>

	