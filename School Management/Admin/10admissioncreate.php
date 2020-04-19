<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="stylelogin.css" rel="stylesheet">
</head>
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
        $item = mysqli_real_escape_string($db->link, $_POST['item']);  
		$taka = mysqli_real_escape_string($db->link, $_POST['taka']);  
        
		if($item==''|| $taka==''){
			$error="Field must not be Empty !!";
		}else{
			$query = "INSERT INTO 10admissionpage(item,taka) Values('$item','$taka')";
			$create = $db->insert($query);
		}
	}
 ?>
 
 <?php
	if(isset($error)){
		echo "<span style='color:red'>".$error."</span>";
	}
 ?>
 
 <form action="10admissioncreate.php" method="post">
	 <table>
		 <tr>
            <td><br>Item</td>
			<td><br><input type="text" name="item" placeholder="please enter your Item"/><td> 

         </tr>
         <tr>
            <td><br>Amount</td>
            <td><br><input type="text" name="taka" placeholder="please enter your Amount"/><td>
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
<button style="margin-left:20px;background-color:white;"> <a style="text-decoration:none;color:blue;font-size:20px;" href="10admission.php">Go back</a></button>
 
 
 
 
 
  
<?php include 'include/footer.php'; ?>
</div>
</body>
</html>