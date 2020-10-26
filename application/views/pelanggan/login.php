<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Login</title>
<?php $this->load->view('templatepelanggan/title.php') ?>
<body>
	<!-- Page Preloder -->
	<?php $this->load->view('templatepelanggan/preloader.php') ?>

	<!-- Header section -->
	
	<!-- Header section end -->
	
	<?php $this->load->view('templatepelanggan/menubar.php') ?>

	<!-- Contact section end -->
	<section class="cart-section-spad" style=" margin: 50px 100px; padding: 0px 400px" align="center">
		
			
			<h2 style="text-align: center;">Masuk</h2>
			
			
                <form method="post" action="<?= base_url('pelanggan/login'); ?>">
                    <!-- Column -->
                 
                    <div style="margin-bottom: : 50px;">
                        <div>
                            <div class="card-body">
                                <div class="contact-form" align="center">
                                	<!-- <?php //$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>'); ?> -->
						<form method="post" action="<?= base_url('pelanggan/login'); ?>">
                <div class="form-group">
                <label for="kdbarang">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control form-control-line">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="kdbarang">Password</label>
                <input type="password" name="password" id="password" placeholder="* * * * *" class="form-control" style="animation: linear;" name = "password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
             
              <div><a href="<?php echo base_url() ?>index/register"><!-- <style>a:hover{
              color: red; background: transparent; text-decoration: underline;}</style> --> <h8 style="color: #F42E3E; margin-right: 120px;">Belum Punya Akun? Daftar!</h8></a>
              </div>
          </div>
          <div class="form-group" style="padding-right: 120px">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <button class="site-btn" style="padding-right: 110px;padding-left: 110px">MASUK</button>
            </form>
	</section>


	


	<!-- Footer section -->
	
	<!-- Footer section end -->
	 <?php $this->load->view('templatepelanggan/modal.php') ?>



	<!--====== Javascripts & Jquery ======-->
	<?php $this->load->view('templatepelanggan/js.php') ?>

	</body>
</html>
