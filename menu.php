<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>(-:) personal website (:-)</title>
	<link rel="stylesheet/less" type="text/css" href="css/styles.less" />
	<link  rel="stylesheet" type="text/css" href="css/test.css" />
	<script src="js/less-1.3.0.min.js" type="text/javascript"></script>
	<script type="text/javascript"> document.write('<script type="text/javascript" src=js/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>'); </script>
	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
	<div class="main" >
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
		<div class="menu">
			<div class="nav">
				<ul>
					<!-- <li id='li0'><a href="index.php" >وب سایت محمد رضا اسماعیل زاده</a></li> -->
					<li id='li2'><a href="index.php?page=about" ></a></li>
					<li id='li3'><a href="text.php" ></a></li>
					<li id='li4'><a href="javascript:void(0)"></a></li>
					<li id='li1'><a href="index.php" ></a></li>
					<li id='li5'><a href="film.php" ></a></li>
					<li id='li6'><a href="index.php?page=link" ></a></li>
					<li id='li7'><a href="index.php?page=contact" ></a></li>
				</ul>
			</div>			
		</div>