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
			$query= "select * from 6classes";
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
					<h3 text-align="center">Class Six Information</h3>
					
							<table>
								<thead>
									<tr>
										<th>ছাত্র</th>
										<th>ছাত্রী</th>
									</tr>
								</thead>
								<tbody>
								<?php if($read){?>
 					<?php while($row =$read->fetch_assoc()){?>
									<tr>
										<td><?php echo $row['item']; ?></td>
										<td><?php echo $row['quantity']; ?></td>
									</tr>

								</tbody>
					<?php } ?>
					<?php } else{ ?>
					<p>Data is not avilable !!</p>
					<?php } ?>
								</table><br><br>

								<table class="tb2">
								<thead>
									<tr>
										<th>ষষ্ঠ শ্রেণীর সকল সাবজেক্ট</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>আনন্দ পাঠ(বাংলা দ্রুত পঠন)</td>
									</tr>
									<tr>
										<td>English for Today </td>
									</tr>
									<tr>
										<td>বাংলা ব্যাকরণ ও নির্মিতি </td>
									</tr>
									<tr>
										<td>গণিত</td>
									</tr>
									<tr>
										<td>বিজ্ঞান</td>
									</tr>
									<tr>
										<td>বাংলাদেশ ও বিশ্বপরিচয়</td>
									</tr>
									<tr>
										<td>ইসলাম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>কৃষি শিক্ষা </td>
									</tr>
									<tr>
										<td>গার্হস্থ্য বিজ্ঞান</td>
									</tr>
									<tr>
										<td>শারীরিক শিক্ষা ও স্বাস্থ্য</td>
									</tr>
									<tr>
										<td>তথ্য ও যোগাযোগ প্রযুক্তি</td>
									</tr>
									<tr>
										<td>কর্ম ও জীবনমুকী শিক্ষা</td>
									</tr>
									<tr>
										<td>চারুপাঠ </td>
									</tr>
									<tr>
										<td>চারু ও কারুকলা</td>
									</tr>
									<tr>
										<td>English Grammer and Composition</td>
									</tr>
									<tr>
										<td>ক্ষুদ্র ও নৃগোষ্ঠীর ভাষা ও সংস্কৃতি </td>
									</tr>
									<tr>
										<td>হিন্দুধর্ম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>বৌদ্ধধর্ম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>খ্রিষ্টধর্ম ও নৈতিক শিক্ষা </td>
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