<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Trajek Line | Keranjang</title>
	<?php $this->load->view('templatepelanggan/title.php') ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php $this->load->view('templatepelanggan/header.php') ?>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Keranjang</h4>
			<div class="site-pagination">
				<a href="./beranda.php">Beranda</a> /
				<a href="./cart.php">Keranjang</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<form action="<?php echo base_url('index/pesan') ?>" method="post">
							<table>
							<thead>
								<tr>
									<th class="product-th">Barang</th>
									<th class="size-th">Tanggal Ambil Kendaraan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-col">
										<img width="59" height="59" src="<?php echo base_url() ?>assets/img/barang/<?= $_POST['gambar']?>" alt="">
										<div class="pc-title">
											<input type="" name="kodebarang" value="<?php echo $_POST['kodebarang'] ?>">
											<h4><?php echo $_POST['merk']; ?></h4>
											<p>Rp. <?php echo $_POST['harga']; ?></p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
												<input type="date" name="tanggal_pengambilan">
                    					</div>									
								</tr>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span> </span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<button class="site-btn">Proses Untuk Cekout</button>
				

					<div class="cart-table">
						<div  style="margin-left: 30px; margin-bottom: 20px; margin-top: -20px">
                                        <label style="font-size: 18px">Metode Pembayaran</label><br>
                                        <input type="radio" name="lunas" value="lunas" style="">&nbsp&nbspLunas<br>
                                        <input type="radio" name="lunas" value="lunas" style="">&nbsp&nbspDP 60%<br>
                                       
                                    </div>
					</div>
			</form>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
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
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
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
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span style="font-size: 7pt">Tambah barang</span></a>
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
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Tambah barang</span style="font-size: 7pt"></a>
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
		</div>
	</section>
	<!-- Related product section end -->



	<!-- Footer section --> 
	<<?php $this->load->view('templatepelanggan/footer.php') ?>
	<!-- Footer section end -->
	<?php $this->load->view('templatepelanggan/modal.php') ?>




	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan/js.php') ?>
	</body>
</html>
