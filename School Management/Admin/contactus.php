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
	$query= "select * from contactus";
	$read= $db->select($query);
 ?>
 
 <?php
	if(isset($_GET['msg'])){
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}
 ?>

 <table class="ta">
 <tr>
	<th >Email</th>
	<th >Facebook</th>
	<th>Mobile</th>
	<th >Telephone</th>
	<th >Fax</th>
	<th>Action</th>
 </tr>
 <?php if($read){?>
 <?php while($row =$read->fetch_assoc()){?>
	 <tr>
		<td ><?php echo $row['email'] ?></td>
		<td ><?php echo $row['facebook'] ?></td>
		<td ><?php echo $row['mobile'] ?></td>
		<td ><?php echo $row['telephone'] ?></td>
		<td ><?php echo $row['fax'] ?></td>
		<td ><button><a style="text-decoration:none;color:red;font-size:20px;" href="cupdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></button></td>
	 </tr>
 <?php } ?>
 <?php } else{ ?>
 <p>Data is not avilable !!</p>
 <?php } ?>
 

 </table><br>
 <button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="ccreate.php">Add Post</a></button>
 
 
 
 
 
 
  
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>