<!DOCTYPE html>
<html>
<head> <link href="stylelogin.css" rel="stylesheet"></head>
<body>
<div class="wrapper">
<?php include 'include/header.php';
include "include/leftsidebar.php";
include ("include/config.php");
include ("include/Database.php");
 ?>
 <?php
	$db= new Database();
	if(isset($_POST['submit'])){
		$post = mysqli_real_escape_string($db->link, $_POST['post']);  
		if($post=='' ){
			$error="Field must not be Empty !!";
		}else{
			$query = "INSERT INTO aboutuspage(post) Values('$post')";
			$create = $db->insert($query);
		}
	}
 ?>
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="acreate.php" method="post">
	 <table>
		 <tr>
			<td><br>Post</td>
			<td><br><input type="text" name="post" placeholder="please enter your post"/><td> 
			
		 </tr>
		 <tr>
			<td></td>
			<td>
			<br>
			<input type="submit" name="submit" value="POST" />
			<input type="reset" value="cancel" />
			</td> 
		 </tr>
	 </table>
 </form>
 <br>
<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="aboutuspost.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?>
</div>
</body>
</html>