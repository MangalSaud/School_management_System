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
	$query= "SELECT * FROM homeimage WHERE id=$id";
	$getData= $db->select($query)->fetch_assoc();
	
	if(isset($_POST['submit'])){ 
					$permited  = array('jpg', 'jpeg', 'png', 'gif');
					$file_name = $_FILES['image']['name'];
					$file_size = $_FILES['image']['size'];
					$file_temp = $_FILES['image']['tmp_name'];
					
					$div = explode('.', $file_name);
					$file_ext = strtolower(end($div));
					$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
					$uploaded_image = "uploads/".$unique_image;
					
						
					if($file_name==''){
						$error="Field must not be Empty !!";
					}elseif ($file_size >1048567) {
						echo "<span class='error'>Image Size should be less then 1MB!
						</span>";
					} elseif (in_array($file_ext, $permited) === false) {
						echo "<span class='error'>You can upload only:-"
						.implode(', ', $permited)."</span>";
					}else{
						move_uploaded_file($file_temp, $uploaded_image);
						$query = " UPDATE homeimage
									SET
									image='$uploaded_image'
									WHERE id= $id";
									$update = $db->update($query);
					}
				}
	
	
 ?>
 <?php
	if(isset($_POST['delete'])){
		$query="DELETE FROM homeimage WHERE id=$id";
		$deleteData = $db->delete($query);
		
		
	}else{
		$query = "select * from homeimage where id='$id'";
		$getImg = $db->select($query);
		if ($getImg) {
			while ($imgdata = $getImg->fetch_assoc()) {
			$delimg = $imgdata['image'];
			unlink($delimg);
			}
		}
	}
 ?>
 
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="homeimageupdate.php?id=<?php echo $id;?>" method="post">
	 <table>
		 <tr>
			<td><br>Image</td>
			<td><br><input type="text" name="image" value="<?php echo $getData['image']?>"/><td> 
		 </tr>
		 <tr>
			<td></td>
			<td>
			<br>
			<input type="submit" name="submit" value="Update" />
			<input type="reset" value="cancel" />
			<input type="submit" name="delete" value="Delete" />
			</td> 
		 </tr>
	 </table>
 </form>
 <br>
 <button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="homeimage.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?> 
</div>
</body>
</html>