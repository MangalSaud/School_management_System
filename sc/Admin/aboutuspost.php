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
	include("../helpers/format.php");
	include "include/leftsidebar.php";
	include ("include/config.php");
	include ("include/Database.php");
 ?>
 <?php
	$db= new Database();
	$fm= new Format();
	$query= "select * from aboutuspage";
	$read= $db->select($query);
 ?>
 
 <?php
	if(isset($_GET['msg'])){
		echo "<span style='color:green'>".$_GET['msg']."</span>";
	}
 ?>

 <table>
 <tr>
	<th width="65%">Post</th>
	<th width="15%">Action</th>
 </tr>
 <?php if($read){?>
 <?php while($row =$read->fetch_assoc()){?>
 <tr>
	<td Style="text-align:justify;border:1px solid black;"><?php echo $fm->textShorten($row['post'],300); ?></td>
	<td Style="text-align:center;border:1px solid black;"><button><a style="text-decoration:none;color:red;font-size:20px;" href="aupdate.php?id=<?php echo urlencode($row['id']);?>">Edit</a></button></td>
 </tr>
 <?php } ?>
 <?php } else{ ?>
 <p>Data is not avilable !!</p>
 <?php } ?>
 

 </table><br>
 <button style="margin-left:20px;background-color:white;"><a style="text-decoration:none;color:green;font-size:20px;" href="acreate.php">Add Post</a></button>
 
 
 
 
 
 
  
<?php
	
		include("include/footer.php")
	
?>
</div>
</body>
</html>