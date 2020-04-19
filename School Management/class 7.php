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
			include("Admin/include/Database.php");
			$db= new Database();
			$query= "select * from 7admissionpage";
			$read= $db->select($query);
			include("include/header.php")
		?>
		
		<div class="add">
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
		<div class="cl6sec">
			<h2>Welcome to Pall Pur High School</h2>
				<div class="pdf">
					<br>
					<h3 text-align="center">Class Seven Admission Information</h3>
					<table>
								<thead>
									<tr>
										<th>ক্রমিক</th>
										<th>আদায়ের বিবরণ</th>
										<th>টাকা</th>
									</tr>
								</thead>
								<tbody>
								<?php if($read){?>
 					<?php while($row =$read->fetch_assoc()){?>
									<tr>
										<td><?php echo $row['id']; ?></td>
										<td><?php echo $row['item']; ?></td>
										<td><?php echo $row['taka']; ?></td>
									</tr>

								</tbody>
					<?php } ?>
					<?php } else{ ?>
					<p>Data is not avilable !!</p>
					<?php } ?>

								</table>
				</div>
		</div>
		
		<?php
			include("include/footer.php")
		?>
		
		</div>
	</body>
</html>