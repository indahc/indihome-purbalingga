<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>IndiHome Admin Page</title>
		<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
	</head>
	<body id="page-top">
		<nav class="navbar navbar-expand navbar-dark bg-primary static-top">
			<a class="navbar-brand mr-1" href="<?= base_url('welcome'); ?>">IndiHome Purbalingga</a>
			<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
				<i class="fas fa-bars"></i>
			</button>
			<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
			<ul class="navbar-nav ml-auto ml-md-0">
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-circle fa-fw"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
		<div id="wrapper">
			<ul class="sidebar navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('admin'); ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#editpaket">
						<i class="fas fa-fw fa-chart-area"></i>
						<span>Edit Paket</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-fw fa-table"></i>
						<span>Data Tables</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="pagesDropdown">
						<a class="dropdown-item" href="#datapaket">Paket Indihome</a>
						<a class="dropdown-item" href="#dataregister">Data Pendaftar</a>
						<a class="dropdown-item" href="#datagangguan">Data Gangguan</a>
					</div>
				</li>
			</ul>
			<div id="content-wrapper">
				<div class="container-fluid">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Welcome Admin Indihome!</li>
					</ol>
					<button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal">
						Tambah Paket
					</button>
					<?= $this->session->flashdata('message'); ?>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
									<button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?= base_url('admin/tambahPaket') ?>" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input class="form-control" id="id_paket" name="id_paket" type="text" placeholder="ID Paket *"required="required"
                                                    data-validation-required-message="Mohon masukkan ID Paket.">
													<p class="help-block text-danger"></p>
												</div>
												<div class="form-group">
													<input class="form-control" id="nama_paket" name="nama_paket" type="text" placeholder="Nama Paket *" required="required"
                                                    data-validation-required-message="Mohon masukkan Nama Paket.">
													<p class="help-block text-danger"></p>
												</div>
												<div class="form-group">
													<input class="form-control" id="harga_paket" name="harga_paket" type="text" placeholder="Harga Paket *" required="required"
                                                    data-validation-required-message="Mohon masukkan Harga Paket.">
													<p class="help-block text-danger"></p>
												</div>
												<label>Pilih Gambar</label> <br/>
												<input type="file" class="form-control mb-2" name="gambar" id="gambar_paket" onchange="previewImage();"/>
												<div class="form-group">
													<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Paket *" required="required"
                                                    data-validation-required-message="Mohon masukkan deskripsi Paket."></textarea>
													<p class="help-block text-danger"></p>
												</div>
											</div>
											<div class="col-lg-12 text-center">
												<div id="success"></div>
												<button class="btn btn-primary btn-block" type="submit" name="tambah">Input Paket</button>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>


					<div class="card mb-3" id="datapaket">
						<div class="card-header">
							<i class="fas fa-table"></i> Data Paket IndiHome</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Paket</th>
											<th>Nama Paket</th>
											<th>Harga Paket</th>
											<th>Gambar Paket</th>
											<th>Deskripsi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($paket_indihome as $paket):?>
										<tr>
											<td><?= $paket['id_paket']; ?></td>
											<td><?= $paket['nama_paket']; ?></td>
											<td><?= $paket['harga_paket']; ?></td>
											<td>
												<img width="50px" height="50px" src="<?= base_url('img/paket/').$paket['gambar_paket']; ?>" alt="">
											</td>
											<td><?= $paket['deskripsi']; ?></td>
											<td>
												<a href="<?=base_url();?>admin/hapuspaket/<?=$paket['id_paket'];?>">Delete</td>
											</tr>
											<?php endforeach;?></tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card mb-3" id=dataregister>
							<div class="card-header">
								<i class="fas fa-table"></i>
								Data Pendaftaran Paket Baru IndiHome</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>NIK</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>No. Telepon</th>
												<th>Email</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($form_pelanggan as $formfile):?>
											<tr>
												<td><?= $formfile['nik']; ?></td>
												<td><?= $formfile['nama']; ?></td>
												<td><?= $formfile['alamat']; ?></td>
												<td><?= $formfile['telepon']; ?></td>
												<td><?= $formfile['email']; ?></td>
												<td>
													<a href="<?=base_url();?>admin/hapusform/<?=$formfile['nik'];?>">Delete</td>
												</tr>
												<?php endforeach;?></tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
							</div>
						</div>
						<div class="card mb-3" id=datagangguan>
							<div class="card-header">
								<i class="fas fa-table"></i>
								Data Laporan Gangguan</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>NIK</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>No. Telepon</th>
												<th>Gangguan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($lapor_gangguan as $gangguan):?>
											<tr>
												<td><?= $gangguan['nik']; ?></td>
												<td><?= $gangguan['nama']; ?></td>
												<td><?= $gangguan['alamat']; ?></td>
												<td><?= $gangguan['telepon']; ?></td>
												<td><?= $gangguan['gangguan']; ?></td>
												<td>
													<a href="<?=base_url();?>admin/hapusform/<?=$gangguan['nik'];?>">Delete</td>
												</tr>
												<?php endforeach;?></tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
							</div>
							<footer class="sticky-footer">
								<div class="container my-auto">
									<div class="copyright text-center my-auto">
										<span>Copyright © IndiHome Purbalingga 2019</span>
									</div>
								</div>
							</footer>
						</div>
					</div>
					<a class="scroll-to-top rounded" href="#page-top">
						<i class="fas fa-angle-up"></i>
					</a>
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									<a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
								</div>
							</div>
						</div>
					</div>
					<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
					<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
					<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
					<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
					<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
					<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
					<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
					<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
					<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
				</body>
			</html>