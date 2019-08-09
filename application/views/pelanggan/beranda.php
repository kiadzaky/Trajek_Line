<!DOCTYPE html>
<html lang="zxx">
<!-- Header -->
<title>Trajek Line | Beranda</title>
	<?php $this->load->view('templatepelanggan/title.php') ?>
<body>
	<!-- Page Preloder -->
	<?php $this->load->view('templatepelanggan//preloader.php') ?>
	<!-- Header section -->
	<!-- Header section end -->
	<?php $this->load->view('templatepelanggan/header.php') ?>
	<?php $this->load->view('templatepelanggan/menubar.php') ?>


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url() ?>/assets1/img/background.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Menyewakan</span>
							<h2>Canon EOS-1DX mk.ii</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url() ?>/assets1/img/background2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Menyewakan</span>
							<h2>Kawasaki H2R</h2>
							<p>Rasakan keistimewaan menggunakan high-end motor sport (khusus kaum yang mampu) </p>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url() ?>/assets1/img/icons/1.png" alt="#">
						</div>
						<h2>Pembayaran Mudah</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url() ?>/assets1/img/icons/2.png" alt="#">
						</div>
						<h2>Semua Ada</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url() ?>/assets1/img/icons/3.png" alt="#">
						</div>
						<h2>Cash on Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
	<!--	<div class="container" >
			<div class="section-title" style="margin-bottom: 50px">
				<h2>Barang Terlaris</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url() ?>/assets1/img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Sony A7R mark iii </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="<?php echo base_url() ?>/assets1/img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Sony A6000</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url() ?>/assets1/img/product/12.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="view-barang-mobil.php" class="wishlist-btn"><i class="flaticon-search"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Jeep Rubicon </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Fujifilm XT-10 </p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#barangModal" data-toggle="modal" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="view-barang.php" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Canon EOS-1DX </p>
						</div>
					</div>
			</div>
		</div> -->
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>Kategori Produk</h2>
			</div>
			<div class="row" style="justify-content: center;">
				<div class="col-lg-3 col-sm-6" style="margin: 0px 30px">
					<div class="product-item">
						<div class="pi-pic">
							<a href=""><img src="<?php echo base_url() ?>/assets1/img/category/camera.png" alt=""></a>
							<div class="pi-category" style="justify-content: center; color: white">
								<a href="<?= base_url('index/listkamera') ?>"><h5 style="color: #fff;">Kamera</h5></a>
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>Kamera</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a> -->
							</div>
						</div>
						<!-- <div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div> -->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" style="margin: 0px 30px">
					<div class="product-item">
						<div class="pi-pic">
							<!-- <div class="tag-sale">ON SALE</div> -->
							<a href="#"><img src="<?php echo base_url() ?>/assets1/img/category/car.png" alt=""></a>
							<div class="pi-category">
								<a href="<?= base_url('index/listmobil') ?>"><h5 style="color: #fff"> Mobil</h5></a>
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a> -->
							</div>
						</div>
						<!-- <div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div> -->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" style="margin: 0px 30px">
					<div class="product-item">
						<div class="pi-pic">
							<a href="#"><img src="<?php echo base_url() ?>/assets1/img/category/motor.png" alt=""></a>
							<div class="pi-category">
								<a href="<?= base_url('index/listsepeda') ?>"><h5 style="color: #fff">Motor</h5></a>
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a> -->
							</div>
						</div>
						<!-- <div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div> -->
					</div>
				</div>
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url() ?>/assets1/img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-search"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div> -->
	</section> 
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo base_url() ?>/assets1/img/banner-bg.jpg">
				<!-- <div class="tag-new">NEW</div> -->
				<span>Kritik & Saran</span>
				<h2>Berikan Komentarmu</h2>
				<a href="<?php echo base_url() ?>/index/contact" class="site-btn">Kritik & Saran</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


<!-- Footer section -->
	<?php $this->load->view('templatepelanggan//footer.php') ?>
	<!-- Footer section end -->
        <?php $this->load->view('templatepelanggan//modal-barang.php') ?>
        <?php $this->load->view('templatepelanggan//modal.php') ?>
	<!--====== Javascripts & Jquery ======-->
<?php $this->load->view('templatepelanggan//js.php') ?>

	</body>
</html>
