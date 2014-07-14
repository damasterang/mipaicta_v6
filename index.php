<!DOCTYPE html>
<html>
	<head>
		<title>Mipaicta</title>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jqueryKu.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$("#imgSlide img").hide();
				$("#statementSlide div").hide();

				$("#imgSlide img").eq(0).fadeIn("fast");
				$("#statementSlide div").eq(0).fadeIn("fast");

				go(1);
			});
			function go(i) {
				var $img = $("#imgSlide img");
				var $state = $("#statementSlide div");
				setTimeout(function(){
					// $img.not(':eq('+i+')').fadeOut(400);
					// $state.not(':eq('+i+')').fadeOut(400);
					// $img.eq(i).fadeIn(500);
					// $state.eq(i).fadeIn(500);

					$img.animate({
						left: "-200px",
						opacity: "0"},
						1000).fadeOut();
					$img.eq(i).fadeIn().animate({
						left: "0",
						opacity: "1"
					}, 1000);

					$state.animate({
						right: "-200px",
						opacity: "0"},
						1000).fadeOut();
					$state.eq(i).fadeIn().animate({
						right: "0",
						opacity: "1"
					}, 1000);

			 		if (i==2) i=0;    
			 		else i++;
			 		go(i);
			 		console.log(i);
				},5000);
			}
		</script>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body class="hiddenOverflow">
		<div id="headerPlace"></div>

		<div id="main">
			<div id="slideShow">
				<div id="imgSlide">
					<img src="img/1.png" alt="1">
					<img src="img/2.png" alt="2">
					<img src="img/3.png" alt="3">
				</div>
				<div id="statementSlide">
					<div class="state" id="state1">
						<h1>Selamat Datang di Mind Pro Reader</h1>
					</div>
					<div class="state" id="state2">
						<h1>Apa itu Mind Pro Reader ?? <br> Sistem Rekomendasi Smartphone Berbasis Web</h1>
					</div>
					<div class="state" id="state3">
						<h1>Kami Merekomendasikan Smartphone <br> Sesuai Kebutuhan Anda</h1>
					</div>
				</div>
			<a href="spesifikasi.php" id="AGo">Go</a>
			</div>
			<!-- <div id="steps">
				<div class="arrowUp"></div>
			</div> -->
		</div>

		<div id="header">
			<div id="logo">
				<img src="img/logo3.png" alt="logo">
			</div>
			<!-- <nav id="navigation">
				<a href="#">Home</a>
				<a href="#steps">Link1</a>
				<a href="#">Link2</a>
				<a href="#">Link3</a>
			</nav> -->
			<div id="mindReader">Mind Reader</div>
			<!-- <div class="arrowDown"></div> -->
			<img id="backgroundLeft" class="plusBackground" src="img/backgroundLeft.png" alt=""/>
			<img id="backgroundRight" class="plusBackground"  src="img/backgroundRight.png" alt=""/>
		</div>

		<div id="footer">
			<div id="teamDescription">
				
				<div class="leader">
					<img class="leaderImg" src="img/Ltiwi.png" alt="tiwi">
					<div class="leaderState">
						<div class="name">DWI PUTRI PERTIWI</div>
						<div class="level">SYSTEM BUILDER</div>
						<div class="linkSosMed">
							<a href="https://www.facebook.com/dwiputri.pertiwii"><img class='sosmed' id="facebook_1" src="img/facebook.png" /></a>
							<a href="https://twitter.com/dwiputriiiii"><img class='sosmed' id="twitter_1" src="img/twitter.png" /></a>
							<img class='sosmed email' id="email_1" src="img/email.png" />
							<div class="email_info" id="email_info_1">dwiputripertiwi@student.uns.ac.id</div>
						</div>
					</div>
				</div>

				<div class="leader">
					<img class="leaderImg" src="img/Lfathin.png" alt="fathin">
					<div class="leaderState">
						<div class="name">FATHIN MUBARAK</div>
						<div class="level">DESIGNER</div>
						<div class="linkSosMed">
							<a href="https://www.facebook.com/fathin.mubarak"><img class='sosmed' id="facebook_2" src="img/facebook.png" /></a>
							<a href="https://twitter.com/fatorthin"><img class='sosmed' id="twitter_2" src="img/twitter.png" /></a>
							<img class='sosmed email' id="email_2" src="img/email.png" />
							<div class="email_info" id="email_info_2">fathin.mubarak@student.uns.ac.id</div>
						</div>
					</div>
				</div>

				<div class="leader">
					<img class="leaderImg" src="img/Ldamas.png" alt="damas">
					<div class="leaderState">
						<div class="name">DAMAS FAJAR PRIYANTO</div>
						<div class="level">PROGRAMMER</div>
						<div class="linkSosMed">
							<a href="http://www.facebook.com/damas.terang"><img class='sosmed' id="facebook_3" src="img/facebook.png" /></a>
							<a href="https://twitter.com/damasterang"><img class='sosmed' id="twitter_3" src="img/twitter.png" /></a>
							<img class='sosmed email' id="email_3" src="img/email.png" />
							<div class="email_info" id="email_info_3">damas.fp@student.uns.ac.id</div>
						</div>
					</div>
				</div>
			</div>
			<div id="itemFooter">Copyright &copy;2014</div>
		</div>
	</body>
</html>