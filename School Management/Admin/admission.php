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
		include ("include/config.php");
		include ("include/Database.php");
		include("include/header.php")
	?>
	<?php
		$db= new Database();
		include("include/leftsidebar.php")
	?>
	<?php
		if(isset($_POST['submit'])){
			$allow=array('pdf');
			$temp=explode(".",$FILES['pdf_file']['name']);
			$extension=end($temp);
			$upload_file=$_FILES['pdf_file']['name'];
			move_uploaded_file($_FILES['pdf_name']['temp_name'],"uploads/pdf/".$_FILES['pdf_file']['name']);
			
			$query =mysqli_query($con,"INSERT INTO pdffile(pdf_file) Values(".$upload_file.")"); 
			$create = $db->insert($query);
		}
	?>
	
	<section class="post">
		<section class="postdiv">
				<h1 style="font-size:25px;">Update Admission page Post</h1>
				<form action="" method="post" enctype="multipart/from-data">
				  <input type="file" id="main-input" class="from-control from-input from-style-base" accept="application/pdf"><br>
				  <input type="submit" value="submit">
				</form> 
		</section>
		
	</section>
	<?php
	
		include("include/footer.php")
	
	?>
	</div>
</body>
</html>