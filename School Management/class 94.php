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
			$query= "select * from 9classes";
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
					<h3 text-align="center">Class Nine Information</h3>
					
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


								<table>
								<thead>
									<tr>
										<th>নবম শ্রেণীর সকল সাবজেক্ট</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>বাংলা সাহিত্য</td>
									</tr>
									<tr>
										<td>বাংলা সহপাঠ</td>
									</tr>
									<tr>
										<td>বাংলা ভাষার ব্যাকরণ </td>
									</tr>
									<tr>
										<td>English for Toady </td>
									</tr>
									<tr>
										<td>গণিত</td>
									</tr>
									<tr>
										<td>English Grammer and Composition</td>
									</tr>
									<tr>
										<td>তথ্য ও যোগাযোগ প্রযুক্তি</td>
									</tr>
									<tr>
										<td>বিজ্ঞান</td>
									</tr>
									<tr>
										<td>রচনাসম্ভার</td>
									</tr>
									<tr>
										<td>পদার্থবিজ্ঞান </td>
									</tr>
									<tr>
										<td>রসায়ন</td>
									</tr>
									<tr>
										<td>জীববিজ্ঞান </td>
									</tr>
									<tr>
										<td>উচ্চতর গণিত</td>
									</tr>
								
									<tr>
										<td>ভূগোল ও পরিবেশ</td>
									</tr>
									<tr>
										<td>অর্থনীতি </td>
									</tr>
									<tr>
										<td>কৃষিশিক্ষা</td>
									</tr>
									<tr>
										<td>গার্হস্থ্য বিজ্ঞান </td>
									</tr>
									<tr>
										<td>পৌরনীতি ও নাগরিকতা</td>
									</tr>
									<tr>
										<td>হিসাববিজ্ঞান </td>
									</tr>
									<tr>
										<td>ফিন্যান্স ও ব্যাংকিং </td>
									</tr>
									<tr>
										<td>ব্যবসায় উদ্যোগ</td>
									</tr>
									<tr>
										<td>ইসলাম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>হিন্দু ধর্ম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>বৌদ্ধধর্ম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>খ্রিষ্টধর্ম ও নৈতিক শিক্ষা</td>
									</tr>
									<tr>
										<td>ক্যারিয়ার এডুকেশন</td>
									</tr>
									<tr>
										<td>বাংলাদেশ ও বিশ্বপরিচয়</td>
									</tr>
									<tr>
										<td>চারু ও কারুকলা</td>
									</tr>
									<tr>
										<td>বাংলাদেশের ইতিহাস ও বিশ্বসভ্যতা </td>
									</tr>
									<tr>
										<td>শারীরিক শিক্ষা, স্বাস্থ্য বিজ্ঞান ও খেলাধুলা</td>
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