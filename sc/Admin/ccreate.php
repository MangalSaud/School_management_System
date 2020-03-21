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
		$email = mysqli_real_escape_string($db->link, $_POST['email']); 
		$facebook = mysqli_real_escape_string($db->link, $_POST['facebook']);  
		$mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);  
		$telephone = mysqli_real_escape_string($db->link, $_POST['telephone']);  
		$fax = mysqli_real_escape_string($db->link, $_POST['fax']);  

			
		if($email=='' || $facebook=='' || $mobile=='' || $telephone=='' || $fax==''){
			$error="Field must not be Empty !!";
		}else{
			$query = "INSERT INTO contactus(email,facebook,mobile,telephone,fax) Values('$email','$facebook','$mobile','$telephone','$fax')";
			$create = $db->insert($query);
		}
	}
 ?>
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="ccreate.php" method="post">
	 <table>
		 <tr><br>
			<td>Email</td>
			<td><input type="text" name="email" placeholder="please enter your title"/><td>
		 </tr>
		 <tr>
			<td>Facebook</td>
			<td><input type="text" name="facebook" placeholder="please enter your title"/><td>
		 </tr>
		 <tr>
			<td>Mobile</td>
			<td><input type="text" name="mobile" placeholder="please enter your title"/><td>
		 </tr>
		 <tr>
			<td>Telephone</td>
			<td><input type="text" name="telephone" placeholder="please enter your title"/><td>
		 </tr>
		 <tr>
			<td>Fax</td>
			<td><input type="text" name="fax" placeholder="please enter your post"/><td> 
			
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
<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="contactus.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?>
</div>
</body>
</html>