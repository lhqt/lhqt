<!doctype html>
<html lang="vi">
<head>
	<title>Bài môn Lập trình web nâng cao</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/44a18804aa.js" crossorigin="anonymous"></script>	 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="js/Gradient.js" defer></script>
	<script src="js/darkmode.js" defer></script>
	<link rel="stylesheet" href="css/index.css" defer>
</head>

<body>
	<div class="khung-màu">
		<canvas id="gradient-canvas" data-transition-in ></canvas>
		<canvas id="gradient-canvas2" data-transition-in ></canvas>
	</div>		
	
	<div class="điều-hướng">
		<div class="logo">
			<img src="img/6.png">
		</div>
		<ul id="ListMenu" class="🎯" TrạngThái="ẩn">
			<li><a href="https://www.ea.com/games/the-sims/the-sims-4/download">Tải xuống</a></li>
			<li><a href="banmorong.html">Bản mở rộng</a></li>
			<li><a href="mod.html">Mod Việt hóa</a></li>
		</ul>

		<div class="bên-phải">
			<a class ="👤" href="<?php 
									include "ketnoi.php";
									session_start();
									if(isset($_SESSION['mySession']))
									{ 
										echo "dangxuat.php";
									}
									else
									{
										echo "dangnhap.php";
									}
								?>">
				<?php 
					if(isset($_SESSION['mySession']))
        			{ 
						echo "đăng xuất";
					}
					else
					{
						echo "đăng nhập";
					}
				?>
			<i class="fa-solid fa-minus"></i><i class="fa-solid fa-angle-right"></i></a>
			<div class="DarkMode">
				<a class="☀️ đang ✔️"><span class="material-icons">brightness_7</span></a>
				<a class="🌙 đang"><span class="material-icons">brightness_4</span></a>
			</div>
		</div>
	</div>

	<div class="tieude">
		<div class="con">
			<h1 class="slogan">Tự do xây dựng một thế giới mới cùng bạn bè</h1>
			<p class="slogan" id="sloganOverlay">Tự do xây dựng một thế giới mới cùng bạn bè</p> 
			<p class="slogan" id="sloganOverlay2">Tự do xây dựng một thế giới mới cùng bạn bè</p> 
			<h2>Với hơn 60 bản mở rộng mang đến các nội dung đặc biệt giúp bạn thỏa sức sáng tạo Nay cùng bản mod tiếng Việt giúp mọi thứ càng thú vị và dễ dàng hơn</h2>
			
			
		</div>
		<div class="cover">
			<img class="mask" src="img/1.png">
		</div>	
	</div>
	
	<div class="bangchuyen">
		<div class="hàngtrên">
			<img class="box" src="/181A020029/img/7.png">
			<img class="box" src="/181A020029/img/8.png">
			<img class="box" src="/181A020029/img/9.png">
			<img class="box" src="/181A020029/img/10.png">
			<img class="box" src="/181A020029/img/11.png">
			<img class="box" src="/181A020029/img/12.png">
			<img class="box" src="/181A020029/img/13.png">
			<img class="box" src="/181A020029/img/14.png">
			<img class="box" src="/181A020029/img/15.png">
			<img class="box" src="/181A020029/img/16.png">
			<img class="box" src="/181A020029/img/17.png">
			<img class="box" src="/181A020029/img/7.png">
			<img class="box" src="/181A020029/img/8.png">
			<img class="box" src="/181A020029/img/9.png">
			<img class="box" src="/181A020029/img/10.png">
			<img class="box" src="/181A020029/img/11.png">
			<img class="box" src="/181A020029/img/12.png">
			<img class="box" src="/181A020029/img/13.png">
			<img class="box" src="/181A020029/img/14.png">
			<img class="box" src="/181A020029/img/15.png">
			<img class="box" src="/181A020029/img/16.png">
			<img class="box" src="/181A020029/img/17.png">
		</div>
		<div class="hàngtrên hàngdưới">
			<img class="box" src="/181A020029/img/18.png">
			<img class="box" src="/181A020029/img/19.png">
			<img class="box" src="/181A020029/img/20.png">
			<img class="box" src="/181A020029/img/21.png">
			<img class="box" src="/181A020029/img/22.png">
			<img class="box" src="/181A020029/img/23.png">
			<img class="box" src="/181A020029/img/24.png">
			<img class="box" src="/181A020029/img/25.png">
			<img class="box" src="/181A020029/img/26.png">
			<img class="box" src="/181A020029/img/27.png">
			<img class="box" src="/181A020029/img/28.png">
			<img class="box" src="/181A020029/img/29.png">
			<img class="box" src="/181A020029/img/18.png">
			<img class="box" src="/181A020029/img/19.png">
			<img class="box" src="/181A020029/img/20.png">
			<img class="box" src="/181A020029/img/21.png">
			<img class="box" src="/181A020029/img/22.png">
			<img class="box" src="/181A020029/img/23.png">
			<img class="box" src="/181A020029/img/24.png">
			<img class="box" src="/181A020029/img/25.png">
			<img class="box" src="/181A020029/img/26.png">
			<img class="box" src="/181A020029/img/27.png">
			<img class="box" src="/181A020029/img/28.png">
			<img class="box" src="/181A020029/img/29.png">
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>
