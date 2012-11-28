<?php
include_once('menu.php') ;
?>
		<div class="gal_container">						
			<div class="pic_plc film_plc">
				<div class="filmttl title"></div>
				<div class="move">
					<div class="list_film">
					<div style="background-image:url('images/gallery/8.jpg');images/gallery/1.jpg" onclick="playVideo('film1')">
						<div class="img_con">
							<img src="./images/play_ico.png" alt="play film" class='play_ico'  />
						</div>
						<div class="info"><p>این فیلم از جنگل است.</p></div>
					</div>
					<div onclick="playVideo('film2')">
						<div class="img_con">
							<img src="./images/play_ico.png" alt="play film" class='play_ico' />
						</div>
						<div class="info"><p>این فیلم از جنگل است.</p></div>
					</div>
					<div onclick="playVideo('film3')">
						<div class="img_con">
							<img src="./images/play_ico.png" alt="play film" class='play_ico' />
						</div>
						<div class="info"><p>این فیلم از جنگل است.</p></div>
					</div>
					<div onclick="playVideo('film4')">
						<div class="img_con">
							<img src="./images/play_ico.png" alt="play film" class='play_ico' />
						</div>
						<div class="info"><p>این فیلم از جنگل است.</p></div>
					</div>
					<div class="clear"></div>
				</div>
					<div class="show_film">
					<div class="video">
						<div class="backToList" onclick="showList()" ></div>
						<embed src='videos/film1.wmv'  showcontrols="false"stretchtofit="false" autostart="false" width="400"  id='film1' />
						<embed src='videos/film2.wmv'  showcontrols="false"stretchtofit="false" autostart="false" width="400"  id='film2'/>
						<embed src='videos/film3.wmv'  showcontrols="false"stretchtofit="false" autostart="false" width="400"  id='film3' />
						<embed src='videos/film4.wmv'  showcontrols="false"stretchtofit="false" autostart="false" width="400"  id='film4' />
					</div>
					<div class="describe">
						<div class='des_con'><span class="ttl">درباره فیلم:<br/></span>
							اينجانب جميله اسماعيل زاده کارشناس حرفه و فن و دبير مدرسه نمونه دولتي کوثر شهر مشهد هستم.
						<br/><a href="Wildlife.wmv">دانلود فیلم</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="paging" id='film_paging'>
					<ul>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
					</ul>
				</div>
				</div>
				<div class="clear"></div>
				
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>