<?php


include "server.php";
if(!isset($_SESSION['username']))
       header("location: index.php?Message=Login To Continue");


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>marsiajarstem@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">MARSIAJAR<span>STEM</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="home.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li class="active"><a href="gallery.php">Gallery</a></li>
									<li><a href="education.php">Education</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
								
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="home.php">Home</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
				<li class="menu_mm"><a href="gallery.php">Gallery</a></li>
				<li class="menu_mm"><a href="education.php">Education</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li>Langkah-Langkah Pembuatan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title">Cara Pembuatan Mobilan Listrik Dari Botol</div>
						
						<div class="blog_image"><img src="images/mobilan.jpg" alt=""></div>
						<div class="blog_post_text">
							<h2 class="justify">Bahan-bahan</h2>
						<ol><p>
							<li><p>2 Botol plastik bekas</p></li>
							<li><p>1 Sedotan</p></li>
                            <li><p>1 Kayu kecil atau sapu lidiBotol bekas minyak wangi</p></li>
							<li><p>4 Buah tutup botol</p></li>
							<li><p>Lem tembak</p></li>
							<li><p>Kater</p></li>
							<li><p>Dinamo tamiya</p></li>
							<li><p>Baterai</p></li>
                            <li><p>Karton dari wadah susu atau kertas karton lain</p></li>
                            <li><p>Spidol</p></li>
                            <li><p>Korek api</p></li>
						</ol></p>

                        

						<h2 class="justify">Cara Pembuatan</h2>
						<ol><p>
							<li><p>Gunting sedotan sesuai dengan ukuran botol bekas.</p></li>
							<li><p>Oleskan lem pada sedotan dengan lem tembak. Hati-hati saat mengelem.</p></li>
							<li><p>Proses selanjutnya kita akan membuat roda pada botol plastik</p></li>
							<li><p>Lubangi tutup botol dengan menggunakan paku panas atau alat apapun. Lalu kita sesuaikan ukuran lubang botol dengan kayu atau sapu lidi agar pas untuk roda mobil listrik kita.</p></li>
                            <li><p>Kita lem roda tutup botol dengan lem tembak supaya tidak lepas saat berjalan nanti.</p></li>
                            <li><p>Masukkan kayu atau sapu lidi pada sedotan. Hati-hati agar tidak lepas sedotannya. </p></li>
                            <li><p>Gunting kayu atau sapu lidi sesuai ukuran. </p></li>
                            <li><p>Lalu pasangkan tutup botol kedua. </p></li>
                            <li><p>Olesi Lem juga pada tutup botol kedua agar merekat kuat dengan lem tembak. Lakukan juga pada sedotan yang satu lagi.</p></li>
                            <li><p>Selesai pembuatan mobil dari botol plastik bekas. Kita akan lanjut pada pembuatan baling-baling beserta pemberian dinamo tamiya. </p></li>
                            <li><p>Membuat baling-baling. Alat dan bahannya ialah gunting, kater, dan botol bekas. </p></li>
                            <li><p>Kita beri pola memakai spidol  supaya lebih rapi saat membuat baling-baling. Lalu kita potong menggunakan kater. </p></li>
                            <li><p>Setelah dipotong, lanjut kita gunting untuk menjadikanya baling-baling. Sahabat bisa membuat pola agar lebih rapi dan mudah saat menggunting.</p></li>
                            <li><p>Memanaskan bilah baling-baling agar lebih rapi dan tidak kaku. Gunakan korek api atau lilin. Dekatkan korek api atau lilin pada bilah baling-baling. </p></li>
                            <li><p>Mengolesi lem pada dinamo tamiya. </p></li>
                            <li><p>Merekatkan dinamo tamiya pada tutup botol baling-baling. </p></li>
                            <li><p>Olesi lagi dinamo tamiya dengan lem menggunakan lem tembak. </p></li>
                            <li><p>Tempelkan pada bagian belakang mobil mainan. </p></li>
                            <li><p>Gunakan kater untuk membelahh garis putus-putus pada tengah pola yang sudah di buat seperti gambar nomer 20. Ini digunakan untuk membuat kaca mobil listrik</p></li>
                            <li><p>Jika sudah dibelah maka selanjutnya lipat bagian itu ke arah depan untuk menjadi kaca mobil listrik. </p></li>
                            <li><p>Jangan gunakan lem pada baterai, gunakan bagian belakang lipatan yang sudah kita buat untuk menyangga baterai. Dan baterai harus bersentuhan dengan dinamo tamiya.</p></li>
                            <li><p>Mobil listrik dari botol bekas siap digunakan. </p></li>
						</ol> </hp5>
						</div>
							</div>
						</div>

						
					

	
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Marsiajar<span>STEM</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Science, Technology, Engineering and Mathematics.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://www.facebook.com/profile.php?id=100081341329928"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="mailto:marsiajarstem@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/stemlaboratory/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: marsiajarstem@gmail.com</li>
											<li>Toba,Sumatera Utara,Indonesia</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Menu</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="home.php">Home</a></li>
											<li><a href="about.php">About</a></li>
											<li><a href="courses.php">Courses</a></li>
											<li><a href="gallery.php">Gallery</a></li>
											<li><a href="education.php">Education</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> NOTANES  <i class="fa fa-heart-o" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>