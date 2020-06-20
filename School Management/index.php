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
			include("helpers/format.php");
			include("include/header.php");
			include("include/slider.php");
		?>
		<?php
			$db= new Database();
			$fm= new Format();
			$query= "select * from homepage";
			$read= $db->select($query);
		 ?>
		 <?php
			$query= "select * from homeimage";
			$image= $db->select($query);
		 ?>
		<br>
		<div class="add">
				<div class="searchbar">
				<form>
					<input type="text"><br>
					<input type="submit" value="Search">
				</form>
				</div>
		</div>
		<div class="sec">
			<h2>Welcome to Pall Pur High School</h2><br>
		<?php if($image){?>
			 <?php while($row =$image->fetch_assoc()){?>
			<img  src="Admin/<?php echo $row['image'];?>">
		 <?php } ?>
		 <?php } else{ ?>
		 <p>Data is not avilable !!</p>
		 <?php } ?>
		</div>
		<div class="add1">
			<?php
				include("include/sitemenu.php")
			?>
		</div>
		
		<div class="maincontent clear">
			<div class="samepost clear">	
		<?php if($read){?>
			 <?php while($row =$read->fetch_assoc()){?>
								<h2><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h2>
								<h4><?php echo $fm->formatDate($row['date']);?></h4>
								<a><img src="Admin/<?php echo $row['image'];?>"/></a>
								<p><?php echo $fm->textShorten($row['post']);?></p><br><br>
								<div class="readmore clear">
									<a href="post.php?id=<?php echo $row['id'];?>">Read More</a>
								</div>
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
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	
		<script type="text/javascript">
				$(document).ready(function() {
					var s = $("#sticker");
					var pos = s.position();					   
					$(window).scroll(function() {
						var windowpos = $(window).scrollTop();
						if (windowpos >= pos.top) {
							s.addClass("stick");
						} else {
							s.removeClass("stick");	
						}
					});
				});
		</script> 
	</body>
</html>