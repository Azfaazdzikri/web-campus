<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>LOANS2GO | Loans HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="<?= base_url('assets/img/favicon.ico') ?>" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="<?php echo base_url().'index.php/login/'?>" class="site-logo">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="<?php echo base_url().'index.php/user/user'?>" class="active">Home</a></li>
				<li><a href="<?php echo base_url().'index.php/login'?>">Logout</a></li>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>No Contact </a>
				<div class="hr-btn hr-btn-2">(022) 2013163</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
                <div class="col-lg-6">
				<div class="hs-text">
					<h3><font color="white">Selamat Datang di Universitas Pendidikan Indonesia <?php echo $this->session->userdata('ses_nama');?></font></h3>
					<br>
					<a href="<?php echo base_url().'index.php/user/student'?>" class="site-btn sb-big">Daftar Mahasiswa</a>
				</div>
</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/upi1.jpg') ?>"></div>
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/upi2.jpg') ?>"></div>
			<div class="hs-item set-bg" data-setbg="<?= base_url('assets/img/hero-slider/upi3.jpg') ?>"></div>
		</div>
	</section>
	<!-- Hero Section end -->
	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Tentang Universitas Pendidikan Indonesia</h2><br>
				<h4>Universitas Pendidikan Indonesia (UPI) adalah sebuah perguruan tinggi negeri yang kampus utamanya berkedudukan di Kota Bandung, Jawa Barat, Indonesia.[5] Sejak tahun 2012, UPI berstatus sebagai perguruan tinggi yang diselenggarakan pemerintah (PTP),[6] berubah dari status sebelumnya sebagai perguruan tinggi Badan Hukum Milik Negara (BHMN).
UPI adalah perguruan tinggi yang menganut sistem multikampus[7] yaitu dengan 6 kampus yang tersebar di dua provinsi yaitu Jawa Barat dan Banten. Kampus utama UPI berlokasi di Jalan Setiabudhi 229, Bandung. Sedangkan kampus lainnya berlokasi di Cibiru, Tasikmalaya, Sumedang, Purwakarta, dan Serang.</h4>
			</div>
		</div>
	</section>
	<!-- Why Section end -->
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

	</body>
</html>
