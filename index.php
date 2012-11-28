<?php
include_once('menu.php') ;
?>

		<div class="content_plc">
				<?php
				$page=$_GET['page'] ;
				if ($page=='about') {
				?>
				<div  id='about'>
					<p class="title aboutttl"></p>
به سايت حرفه و فن خوش آمديد.اينجانب جميله اسماعيل زاده کارشناس حرفه و فن و دبير مدرسه نمونه دولتي کوثر شهر مشهد هستم. اين سايت با هدف ارتقاي سطح علمي دانش آموزان راهنمايي و ايجاد محيطي براي تبادل نظر و اطلاعات بين دبيران حرفه ايجاد شده است. براي نيل به اين هدف و ارتقاي سطح محتواي سايت از شما دوست عزيز کمک ميخواهيم؛ چنانچه مطلب، فيلم آموزشي يا... که ميتواند براي خوانندگان اين سايت مفيد باشد را براي اينجانب از قسمت ارسال پيام ارسال کنيد.در صورت مفيد بودن با نام خودتان در سايت قرار داده مي شود
				</div>
				<?php
				}elseif ($page=='contact') {
				?>
				<div id='contact'>
					<p class="title contactttl"></p>
					<table>
						<form action="" method="post">
						<tr>
							<td>نام و نام خانوادگی: </td>
							<td><input type="text" name='name'/></td>
						</tr>
						<tr>
							<td>پست الکترونیک: </td>
							<td><input type="text" name='email'/></td>
						</tr>
						<tr>
							<td>متن پیام: </td>
							<td><textarea name="msg"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class='center'><input type="submit" name='send' value='ارسال'/></td>
						</tr>
						</form>
					</table>
					
				</div>
				<?php	
				}elseif ($page=='link') {
				?>

				<div id="link" class='center'>
					<p class='title linkttl'></p>
					<a href="">تسنباسنب بتیسابی سبتیسابیس</a><br>
					<a href="">تسنباسنب بتیسابیس بتیسابیس</a><br>
					<a href="">تسنباسنب بتیسابیس بتیسابیس</a><br>
					<a href="">تسنباسنب بتیسابیس بتیسابیس</a><br>
					<a href="">تسنباسنب بتیسابیس بتیسابیس</a><br>
					<a href="">تسنباسنب بتیسابیس بتیسابیس</a><br>
				</div>
				<?php
				}
				?>
			
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>