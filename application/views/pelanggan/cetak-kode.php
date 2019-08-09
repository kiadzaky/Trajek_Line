<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Kode Pembayaran</title>
<?php $this->load->view('templatepelanggan/title.php') ?>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php $this->load->view('templatepelanggan/header.php') ?>
	<!-- Header section end -->
	<?php $this->load->view('templatepelanggan/menubar.php') ?>





	<!-- Tentang Perusahaan Start -->

	<section class="cart-section-spad" style="padding: 0px 30px 100px; margin: 50px 0px">
		<div class="cart-table" style="padding-bottom: 50px">
			<h3 style="text-align: center; margin-bottom: 20px">Kode Pembayaran</h3>
			<h3 style="text-align: center; color: #F42E3E;"><?= $kode_otomatis ?></h3>
			<center><div class="row" style="margin-left: 400px">


				<!-- Column -->
				<div class="col-lg-15" style="">
					<div class="card" style="">

						<p style="text-align: center; margin: 0px 30px">Terima kasih sudah memesan. Tunggu dihubungi oleh pihak TRAJEK.
						</p>

					</div>

				</div>
				<!-- Column -->

			</div>
		</center>
	</section>
	<!-- Tentang Perusahaan End -->




	<!-- Footer section -->
	<?php $this->load->view('templatepelanggan/footer.php') ?>
	<!-- Footer section end -->
	<?php $this->load->view('templatepelanggan/modal.php') ?>



	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan/js.php') ?>
</body>

</html>