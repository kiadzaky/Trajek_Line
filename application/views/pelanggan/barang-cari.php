<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Daftar Barang</title>
<?php $this->load->view('templatepelanggan//title.php') ?>

<body>
	<!-- Page Preloder -->
	
	<?php $this->load->view('templatepelanggan/preloader.php') ?>

	<!-- Header section -->
<?php $this->load->view('templatepelanggan/header.php') ?>
<?php $this->load->view('templatepelanggan/menubar.php') ?>
	
	<!-- Page info -->
	
	<!-- Page info end -->
	<!-- Sort bar -->
<div class="col-lg-8 col-sm-5" style="margin: 50px 350px 0px 350px; background-color: #F42E3E">
<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="bar-urutkan">
					<li><p style="color: #fff; margin : 5px 50px 5px 30px">Urutkan : </p></li>
					<li><a href="#">Terkait</a></li>
					<li><a href="#">Terlaris</a></li>
					<li><a href="#">Harga</a>
						<ul class="sub-menu">
							<li><a href="#">Termahal</a></li>
							<li><a href="#">Termurah</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		</div>
	<!-- Category section -->
	<section class="category-section" style="margin: 50px">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<?php $this->load->view('pelanggan/kategori-barang') ?>
				</div>
								
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php foreach ($cari as $cari) {
						?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<!-- <div class="tag-sale">ON SALE</div> -->
									<img height="200" width="350" src="<?php echo base_url() ?>/assets/img/barang/<?= $cari['gambar'] ?>" alt="">
									<div class="pi-links">
										<a href="#" class="add-card" onclick="alert('Barang telah ditambahkan')"><i class="flaticon-bag"></i><span style="font-size: 10px">TAMBAH BARANG</span></a>
										<a href="./view-barang.php" class="wishlist-btn"><i class="flaticon-search"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>Rp. <?= $cari['harga']; ?></h6>
									<p><?= $cari['merk'] ?></p>
								</div>
							</div>
						</div>
						<?php
						} ?>
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	<!-- Footer section -->
	<?php $this->load->view('templatepelanggan//footer.php') ?>
	<!-- Footer section end -->
	<?php $this->load->view('templatepelanggan//modal.php') ?>

	

	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan//js.php') ?>

	</body>
</html>
