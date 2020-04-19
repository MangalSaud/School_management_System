<div class="slider">
		   <img src="images/school.jpg"  id="1">
			<img src="images/photo.jpg"  id="3">
			<img src="images/5.jpg"  id="2">
			<img src="images/8.jpg"  id="4">

			<script>
					var a=1;
					function slide(){
						if(a==1){
							document.getElementById('1').style.display='block';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='none';
							a=2;
						}
						else if(a==2){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='block';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='none';
							a=3;
						}
						else if(a==3){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='block';
							document.getElementById('4').style.display='none';
							a=4;
						}
						else if(a==4){
							document.getElementById('1').style.display='none';
							document.getElementById('2').style.display='none';
							document.getElementById('3').style.display='none';
							document.getElementById('4').style.display='block';
							a=1;
						}

						setTimeout(function(){
							slide();
						},2000)
					}
					slide();

			</script> 
		</div>