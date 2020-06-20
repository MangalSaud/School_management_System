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

<?php include 'include/header.php';
	include("../helpers/format.php");
	include "include/leftsidebar.php";
	include ("include/config.php");
	include ("include/Database.php");
 ?>
 <?php
	$db= new Database();
	$query= "select * from 10classes";

	$read= $db->select($query);
 ?>
 
 <?php
	if(isset($_GET['msg'])){
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}
 ?>

			<table class="ta">
			<tr>
				<th>ছাত্র/ছাত্রী</th>
				<th>সংখ্যা</th>
				<th>Action</th>
			</tr>
			<?php if($read){?>
			<?php while($row =$read->fetch_assoc()){?>
			<tr>
				<td ><?php echo $row['item']; ?></td>
				<td ><?php echo $row['quantity']; ?></td>
				<td ><button><a style="text-decoration:none;color:red;font-size:20px;" href="10classesupdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></button></td>
			</tr>
			<?php } ?>
			<?php } else{ ?>
			<p>Data is not avilable !!</p>
			<?php } ?>
			</table><br>
			<button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="10classescreate.php">Add Post</a></button>
				
 
 
 
 
  
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>