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
	$query= "select * from 9admissionpage";
	$read= $db->select($query);
 ?>
 
 <?php
	if(isset($_GET['msg'])){
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}
 ?>

 <table class="ta">
 <tr>
	<th>ক্রমিক</th>
	<th>আদায়ের বিবরণ</th>
	<th>টাকা</th>
	<th>Action</th>
 </tr>
 <?php if($read){?>
 <?php while($row =$read->fetch_assoc()){?>
 <tr>
	<td ><?php echo $row['id']; ?></td>
	<td ><?php echo $row['item']; ?></td>
	<td ><?php echo $row['taka']; ?></td>
	<td ><button><a style="text-decoration:none;color:red;font-size:20px;" href="9admissionupdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></button></td>
 </tr>
 <?php } ?>
 <?php } else{ ?>
 <p>Data is not avilable !!</p>
 <?php } ?>
 

 </table><br>
 <button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="9admissioncreate.php">Add Post</a></button>
 
 
 
 
 
 
  
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>