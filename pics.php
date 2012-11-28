<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>(-:) personal website (:-)</title>
	<link rel="stylesheet/less" type="text/css" href="css/styles.less" />
	<link rel="stylesheet/less" type="text/css" href="css/gallery-layout.less" />
	<link  rel="stylesheet" type="text/css" href="css/test.css" />
	<script src="js/less-1.3.0.min.js" type="text/javascript"></script>
	<script type="text/javascript"> document.write('<script type="text/javascript" src=js/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>'); </script>
	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
	<div class="backimg">
		<?php
			$images_path = './images/backimg';

			$images = scandir($images_path);
			$slidesLen = 0;
			foreach($images as $img){
				$img_arr = explode('.', $img);
				$img_type = strtolower( end($img_arr) );
				if ($img_type=='jpg') {
					echo "<div style=\"background-image:url('$images_path/$img');\"></div>";
					$slidesLen++;
				}
			}
		?>
	</div>
	<div class="main">
		<div class="menu">
			<div class="icon"></div>
			<div class="nav">
				<ul>
					<li><a href="index.php">صفحه اصلی</a></li>
					<li><a href="index.php?page=about" >درباره من</a></li>
					<li><a href="javascript:void(0)">مطالب</a></li>
					<li><a href="gallery.php">گالری تصاویر</a></li>
					<li><a href="javascript:void(0)">گالری فیلم</a></li>
					<li><a href="index.php?page=link" >سایتهای مرتبط</a></li>
					<li><a href="index.php?page=contact" >تماس با من</a></li>
				</ul>
			</div>
		</div>
		<div class="gal_container">
			<div class="gallery">				
				<div class="pic_plc">
					<div class="describ"><span ></span></div>
					<div class="pic_menu"></div>	
					<div class="mainPic"></div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>