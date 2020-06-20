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
					$title = mysqli_real_escape_string($db->link, $_POST['title']); 
					$post = mysqli_real_escape_string($db->link, $_POST['post']); 
					
					$permited  = array('jpg', 'jpeg', 'png', 'gif');
					$file_name = $_FILES['image']['name'];
					$file_size = $_FILES['image']['size'];
					$file_temp = $_FILES['image']['tmp_name'];
					
					$div = explode('.', $file_name);
					$file_ext = strtolower(end($div));
					$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
					$uploaded_image = "uploads/".$unique_image;
					
						
					if($title=='' || $file_name==''||$post==''){
						$error="Field must not be Empty !!";
					}elseif ($file_size >1048567) {
						echo "<span class='error'>Image Size should be less then 1MB!
						</span>";
					} elseif (in_array($file_ext, $permited) === false) {
						echo "<span class='error'>You can upload only:-"
						.implode(', ', $permited)."</span>";
					}else{
						move_uploaded_file($file_temp, $uploaded_image);
						$query = "INSERT INTO homepage(title,image,post) Values('$title','$uploaded_image','$post')";
						$create = $db->insert($query);
					}
				}
		?>
			 
			 <?php
				if(isset($error)){
					echo "<span style='color:red'>".$error."</span>";
				}
			 ?>
 
		 
		 <form action="create.php" method="post" enctype="multipart/form-data">
			 <table>
			 
				 <tr><br>
					<td>Title</td>
					<td><input type="text" name="title" placeholder="please enter your title"/></td>
				 </tr>
				 <tr>
					 <td><br>
							<label>Upload Image</label>
						</td>
						<td><br>
							<input type="file" name="image"/>
						</td>
				</tr>
				 <tr>
					<td><br>Post</td>
					<td><br><input type="text" name="post" placeholder="please enter your post"/></td> 
					
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
			<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="index.php">Go back</a></button>
			 
 
 
 
 
  
		<?php 
			include 'include/footer.php'; 
		?>
		

   </div>
   </body>
   </html>