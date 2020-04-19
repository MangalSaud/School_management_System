
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
			$query= "select * from pdffile";
			$read= $db->select($query);
		?>
		
		<?php
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
					<h3 text-align="center">Class Six Admission Information</h3>
					<!--  <?php if($read){?>
					<?php while($row =$read->fetch_assoc()){?>
							
						<a><?php echo ($row['pdf_file']);?></a>
						<embed src="Admin/uploads/pdf/3.pdf" type="application/pdf" width="100%" height="600px">

											
					<?php } ?>
					<?php } else{ ?>
					<p>Data is not avilable !!</p>
					<?php } ?> -->
					<table>
						<thead>
							<tr>
								<th>ক্রমিক</th>
								<th>আদায়ের বিবরণ</th>
								<th>টাকা</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>০১</td>
								<td>মাসিক বেতন</td>
								<td>১২০/=</td>
							</tr>
							<tr>
								<td>০২</td>
								<td>ভর্তি/পুনঃভর্তি/রেজিস্ট্রেশন</td>
								<td>৬০০/=</td>
							</tr>
						</tbody>
					</table>
					
					
				</div>
		</div>
		
		<?php
			include("include/footer.php")
		?>
		
		</div>
	</body>
</html>


