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
	$id=$_GET['id'];
	$db= new Database();
	$query= "SELECT * FROM contactus WHERE id=$id";
	$getData= $db->select($query)->fetch_assoc();
	
	
	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($db->link, $_POST['email']); 
		$facebook = mysqli_real_escape_string($db->link, $_POST['facebook']);  
		$mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);  
		$telephone = mysqli_real_escape_string($db->link, $_POST['telephone']);  
		$fax = mysqli_real_escape_string($db->link, $_POST['fax']);  

			
		if($email=='' || $facebook=='' || $mobile=='' || $telephone=='' || $fax==''){
			$error="Field must not be Empty !!";
		}else{
			$query = " UPDATE contactus
			SET
			email='$email',
			facebook='$facebook',
			mobile='$mobile',
			telephone='$telephone',
			fax='$fax'
			WHERE id= $id";
			$update = $db->update($query);
		}
	}
 ?>
 <?php
	if(isset($_POST['delete'])){
		$query="DELETE FROM contactus WHERE id=$id";
		$deleteData = $db->delete($query);
		
		
	}
?>
 
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="cupdate.php?id=<?php echo $id;?>" method="post">
	 <table>
		 <tr><br>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $getData['email']?>"/><td>
		 </tr>
		 <tr>
			<td>Facebook</td>
			<td><input type="text" name="facebook" value="<?php echo $getData['facebook']?>"/><td>
		 </tr>
		 <tr>
			<td>Mobile</td>
			<td><input type="text" name="mobile" value="<?php echo $getData['mobile']?>"/><td>
		 </tr>
		 <tr>
			<td>Telephone</td>
			<td><input type="text" name="telephone" value="<?php echo $getData['telephone']?>"/><td>
		 </tr>
		 <tr>
			<td>Fax</td>
			<td><input type="text" name="fax" value="<?php echo $getData['fax']?>"/><td> 
			
		 </tr>
		 <tr>
			<td></td>
			<td>
			<input type="submit" name="submit" value="Update" />
			<input type="reset" value="cancel" />
			<input type="submit" name="delete" value="Delete" />
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