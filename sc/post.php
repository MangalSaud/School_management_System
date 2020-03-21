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
			include("helpers/format.php");
			include("Admin/include/config.php");
			include("Admin/include/Database.php");
			include("include/header.php");
			include("include/slider.php");
		?>
		<?php
			$id=$_GET['id'];
			$db= new Database();
			$fm= new Format();
			$query= "select * from homepage where id=$id";
			$read= $db->select($query);
		 ?>
		
	<div class="maincontent clear">
	<div class="samepost clear">
		<?php if($read){?>
			 <?php while($row =$read->fetch_assoc()){?>	
					<h2><?php echo $row['title'];?></h2>
					<h4><?php echo $fm->formatDate($row['date']);?></h4>
					<img src="Admin/<?php echo $row['image'];?>" alt="MyImage"/>
					<p><?php echo $row['post'];?></p>	
					
			<?php } ?>
			 <?php } else{ ?>
			 <p>Data is not avilable !!</p>
			 <?php } ?>
	</div>
	</div>
		<?php
			include("include/footer.php")
		?>
		</div>
	</body>
</html>