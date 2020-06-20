<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsiv.css" rel="stylesheet">
	</head>
	<body background="images/body6.jpg">	
		<div class="wrapper">
		 <?php
			include("Admin/include/config.php");
			include ("Admin/include/Database.php");
			include("include/header.php")
		 ?>
		  <?php
				$db= new Database();
				$query= "select * from aboutuspage";
				$read= $db->select($query);
			?>
			<?php
				if(isset($_GET['msg'])){
					echo "<span style='color:green'>".$_GET['msg']."</span>";
				}
			?>
		 
		
		<div class="asec">
			<h2>Welcome to Pall Pur High School</h2>


			<?php if($read){?>
 			<?php while($row =$read->fetch_assoc()){?>

				<img src="Admin/<?php echo $row['image']?>"/>
					<p><?php echo $row['post'];?><br><br></p>
					
			
					<?php } ?>
					<?php } else{ ?>
					<p>Data is not avilable !!</p>
					<?php } ?>
			
		</div>
		<div class="aadd1">
			<div class="searchbar">
				<form>
					<input type="text"><br>
					<input type="submit" value="Search">
				</form>
				</div>
			<?php
				include("include/sitemenu.php")
			?>
		</div>
		
		<?php
			include("include/footer.php")
		?>
		
	
		</div>
	</body>
</html>