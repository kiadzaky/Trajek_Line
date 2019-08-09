<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Kontak Kami</title>
<?php $this->load->view('templatepelanggan//title.php') ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
		<?php $this->load->view('templatepelanggan/header.php') ?>
	<!-- Header section end -->
	<?php $this->load->view('templatepelanggan/menubar.php') ?>


	<!-- Page info -->
	<div class="page-top-info" style="margin-bottom: 0px">
		<div class="container">
			<h4>Contact</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Contact</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<!-- <section class="contact-section">
		<div class="container" style="margin-top: 0px">
			<div class="row">
				<div class="col-lg-10">

				<div class="col-lg-6 contact-info">
					<h3>Get in touch</h3>
					<p>Perumahan Mastrip Blok B-15</p>
					<p>+0331 123 321</p>
					<p>contact@trajek.com</p>
					
						
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>

					</div>
					<div class="contact-form">
				<ul><h3 style="margin-top: 20px">Kritik & Saran</h3>
						<input type="text" placeholder="Nama">
						<input type="text" placeholder="E-mail">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">SEND NOW</button>
						</ul>
					</div>	

				</div>

			</div>

		</div> -->


		<!-- <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div> -->
	</section>
	<!-- Contact section end -->
	<section class="cart-section-spad" style=" margin: 50px 100px">
		
			
			<div class="row">
			
			
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div>
                            <div class="card-body">
					<h3 style="margin-bottom: 40px">Get in touch</h3>
					<p1>Perumahan Mastrip Blok B-15</p1><br>
					<p1>+0331 123 321</p1><br>
					<p1>contact@trajek.com</p1><br>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-sm-6" style="margin-bottom: : 50px; padding-left: 70px">
                        <div>
                            <div class="card-body">
                                <div class="contact-form" align="right">
						<h3 style="margin-bottom: 20px;">Kritik & Saran</h3>
						<?= $this->session->flashdata('message'); ?>
					<form method="post" action="<?= base_url('index/contact'); ?>">
						<input type="text" name="nama" placeholder="Nama">
						<input type="text" name="email" placeholder="E-mail">
						<textarea placeholder="Message" name="pesan"></textarea>
						<button class="site-btn">SEND NOW</button>
					</form>
						</ul>
					</div>
                            </div>
                        </div>
                    </div>
	</div>
	</section>


	<!-- Related product section -->
	<?php $this->load->view('templatepelanggan/related-product.php') ?>
	<!-- Related product section end -->


	<!-- Footer section -->
	<?php $this->load->view('templatepelanggan//footer.php') ?>
	<!-- Footer section end -->
	 <?php $this->load->view('templatepelanggan//modal.php') ?>



	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan//js.php') ?>

	</body>
</html>
