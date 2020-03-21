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
			$query= "select * from contactus";
			$read= $db->select($query);
		 ?>
		 <?php
			$query= "select * from contactimage";
			$image= $db->select($query);
		 ?>
		 
		<div class="cadd">
				<div class="searchbar">
			<form>
				<input type="text">
				<input type="submit" value="Search">
				<!-- <h2>Add</h2> -->
				<!-- <input type="reset"> -->
			</form>
			</div>
		
		</div>
		<div class="csec">

		
			<h3>Welcome to Pall Pur High School</h3>
			<?php if($image){?>
			 <?php while($row =$image->fetch_assoc()){?>
			<img src="Admin/<?php echo $row['image'];?>">
		<?php } ?>
		 <?php } else{ ?>
		 <p>Data is not avilable !!</p>
		 <?php } ?>
			<div class="contact">
	<?php if($read){?>
		<?php while($row =$read->fetch_assoc()){?>
				<h2>Email: <?php echo $row['email'];?></h2>
				<h2>Facebook: <a href="<?php echo $row['facebook'];?>">Facebook Link</a></h2>
				<h2>Mobile: <?php echo $row['mobile'];?></h2>
				<h2>Telephone: <?php echo $row['telephone'];?></h2>
				<h2>Fex: <?php echo $row['fax'];?></h2>
				
								
			 <?php } ?>
			 <?php } else{ ?>
			 <p>Data is not avilable !!</p>
			 <?php } ?>
				
			</div>
		</div>
		<div class="cadd1">
			
			<ul class="selitem">
					<li><a title="All Notice" href="#">All Notice</a></li>
					<li><a title="Student info" href="#">Student info</a></li>
					<li><a title="Course & Curriculum" href="#">Course & Curriculum</a></li>
					<li><a title="Syllabu" href="#">Syllabu</a></li>
					<li><a title="Routine" href="#">Routine</a></li>
				</ul>
				</br>
				</br>
				<ul class="selitem">
					<li><a title="Citizen Charter" href="#">Citizen Charter</a></li>
					<li><a title="Important Link" href="#">Important Link</a></li>
					<li><a title="Administration" href="#">Administration</a></li>
				</ul>
				</br>
				</br>
				<ul class="selitem">
					<li class="dropdown">
						<a class="dropbtn">Result</a>
						<div class="dropdown-content">
						  <a href="result/result6.php">Class 6</a>
						  <a href="result/result7.php">Class 7</a>
						  <a href="result/result8.php">Class 8</a>
						  <a href="result/result9.php">Class 9</a>
						  <a href="result/result10.php">Class 10</a>
						</div>
					 </li>
					<li><a title="Project" href="#">Project</a></li>
					<li><a title="Phone Book" href="#">Phone Book</a></li>
					<li><a title="Dwonload" href="#">Dwonload</a></li>
				</ul>
		
		</div>
		
		<?php
			include("include/footer.php")
		?>
		
		</div>
	</body>
</html>