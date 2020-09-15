<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>IndiHome Purbalingga</title>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css') ?>">
		<link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700') ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Kaushan+Script') ?>" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') ?>" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') ?>" rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('css/agency.min.css') ?>" rel="stylesheet">
	</head>
	<body>
		<body id="page-top">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="#page-top">IndiHome Purbalingga</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						Menu
						<i class="fas fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav text-uppercase ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#paket">Paket</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#promo">Promo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#lapor">Lapor Gangguan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="<?= base_url('login'); ?>">Admin</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<header class="masthead">
				<div class="container">
					<div class="intro-text">
						<?php if($this->session->flashdata('flash')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Success!</strong>
							<?=$this->session->flashdata('flash');?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php endif;?>
						<div class="intro-lead-in">IndiHome Purbalingga</div>
						<div class="intro-heading text-uppercase">Pasang Internet IndiHome</div>
						<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('register'); ?>">Daftar</a>
					</div>
				</div>
			</header>
			<section class="page-section" id="paket">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading text-uppercase">Mau Tanya?</h2>
							<h3 class="section-subheading text-muted">Untuk info lebih lanjut, silahkan klik tombol dibawah ini</h3>
							<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://api.whatsapp.com/send?phone=628112888438">WhatsApp</a>
						</div>
					</div>
					<br/>
					<br/>
					<div class="row text-center">
						<div class="col-md-4">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="service-heading">Paket Internet</h4>
							<p class="text-muted">Layanan digital menggunakan fiber optik yang menawarkan layanan berupa Internet Rumah, Telepon Rumah dan TV Interaktif (UseeTV). Dengan teknologi fiber optik, akses internet jauh lebih cepat sehingga mampu mentransfer data hingga 100Mbps, stabil saat mengakses internet secara bersamaan, serta tahan dalam kondisi cuaca apapun.
							</p>
						</div>
						<div class="col-md-4">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-phone fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="service-heading">Telepon</h4>
							<p class="text-muted">Layanan komunikasi telepon dengan biaya murah dan kualitas yang jernih. Pelanggan akan mendapatkan gratis menelepon sampai 100 menit atau setara dengan 17 jam/bulan (sesuai paket pilihan pelanggan) untuk lokal maupun interlokal.</p>
						</div>
						<div class="col-md-4">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-tv fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="service-heading">UseeTV</h4>
							<p class="text-muted">TV interaktif untuk Anda menonton acara TV favorit, film seru dan berita terkini dengan memberikan banyak pilihan channel berkualitas. Anda juga dapat menikmati berbagai fitur menarik yang hanya ada di UseeTV seperti Pause and Rewind, Video on Demand, TV Storage dan lainnya.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="bg-light page-section" id="promo">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading text-uppercase">Daftar Paket Indihome</h2>
							<h3 class="section-subheading text-muted">
              Paket Value 3 P (Triple Play) = Internet + Telepon + UseeTV</h3>
						</div>
					</div>
					<div class="row">
						<?php foreach ($paket_indihome as $paket):?>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="<?= base_url(" img/paket/").$paket['gambar_paket'];?>" alt="">
							</a>
							<div class="portfolio-caption">
								<h4><?= $paket['nama_paket']; ?></h4>
								<p class="text-muted"><?= $paket['harga_paket']; ?></p>
							</div>
						</div> <?php endforeach;?></div>
				</div>
			</section>
			<section class="bg-dark page-section" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading text-uppercase">Contact Us</h2>
							<h3 class="section-subheading text-muted">Hubungi kami melalui</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto rounded-circle" src="img/team/01.png" alt="">
								<h4>Alamat</h4>
								<p class="text-muted">Jl. MT. Haryono No.58A, Desa_karangsentul, Purbalingga Kulon, Kec. Padamara, Kabupaten Purbalingga, Jawa Tengah 53372</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto rounded-circle" src="img/team/02.png" alt="">
								<h4>Instagram</h4>
								<p class="text-muted">@indihome.purbalingga</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img class="mx-auto rounded-circle" src="img/team/03.png" alt="">
								<h4>Facebook</h4>
								<p class="text-muted">Telkom Indihome Purbalingga</p>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img class="img-fluid d-block mx-auto" src="img/logos/.png" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img class="img-fluid d-block mx-auto" src="img/logos/Telkom Indonesia.png" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img class="img-fluid d-block mx-auto" src="img/logos/Telkom Akses.png" alt="">
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img class="img-fluid d-block mx-auto" src="img/logos/Indihome.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section" id="lapor">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Lapor Gangguan</h2>
					<h3 class="section-subheading text-muted">Anda dapat melaporkan gangguan dengan mengisi form dibawah ini</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" id="nik" name="nik" type="text" placeholder="NIK *" required="required" data-validation-required-message="Mohon masukkan nama Anda.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input class="form-control" id="nama" name="nama" type="text" placeholder="Nama *" required="required" data-validation-required-message="Mohon masukkan alamat Anda.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat *" required="required" data-validation-required-message="Mohon masukkan nomor telepon Anda.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<textarea class="form-control" id="telepon" name="telepon" placeholder="No. Telp *" required="required" data-validation-required-message="Mohon masukkan deskripsi gangguan Paket IndiHome."></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<textarea class="form-control" id="gangguan" name="gangguan" placeholder="Deskripsi Gangguan *" required="required" data-validation-required-message="Mohon masukkan deskripsi gangguan Paket IndiHome."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-12 text-center">
								<div id="success"></div>
								<button class="btn btn-primary btn-block" type="submit" name="tambah">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; IndiHome Purbalingga</span>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li class="list-inline-item">
							<a href="#">Privacy Policy</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Terms of Use</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div id="container">
		<p class="footer">Page rendered in
			<strong>{elapsed_time}</strong>
			seconds.
			<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
	<script src="<?php echo base_url('assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
	<script src="<?php echo base_url('js/jqBootstrapValidation.js') ?>"></script>
	<script src="<?php echo base_url('js/contact_me.js') ?>"></script>
	<script src="<?php echo base_url('js/agency.min.js') ?>">
		>
	</script>
</body>
</html>