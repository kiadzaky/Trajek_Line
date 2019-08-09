<!DOCTYPE html>
<html lang="zxx">
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

    <!-- Page top info -->
    <div class="page-top-info">
        <div class="container">
            <center><h3>Registrasi Akun</h3></center>
            <div class="site-pagination">
                
            </div>
        </div>
    </div>
                
                <!-- Row -->
            <form action="<?= base_url('index/register'); ?>" method="post" enctype="multipart/form-data">
                <div class="row" style="margin: 40px 100px 40px">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card" style="  
                        background: #f0f0f0;
                        border-radius: 27px;
                        overflow: hidden;">
                            <div class="card-body">
                                <center>
                                    <label>Upload Foto Profil</label>  
                                	<input id="foto" type="file" required="" name="gambar" style="">
                                	<div class="row text-center justify-content-md-center" > 
                                        </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card" style="  background: #f0f0f0;border-radius: 27px;overflow: hidden;">
                            <!-- Tab panes -->
                            <div class="card-body" style="padding-top: 10px">
                                
                                    <h3 style="text-align: right; margin-bottom: 20px; margin-right: 50px">Registrasi </h3>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="input-form">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" required="" name="nama" placeholder="Nama Lengkap" class="form-control form-control-line">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" required="" placeholder="E-mail" class="form-control form-control-line" name="email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" required="" name="password" class="form-control form-control-line">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Nomor Handphone</label>
                                        <div class="col-md-12">
                                            <input type="text" required="" name="nomor" placeholder="Nomor Handphone" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">NIK</label>
                                        <div class="col-md-12">
                                            <input type="text" required="" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="input-form">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" required="" name="alamat" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-sm-12" style="text-align: right;">
                                            <button class="btn btn-danger">Buat Akun</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>
                    

	<!-- Footer Start -->
    <?php $this->load->view('templatepelanggan/footer.php') ?>
	<!-- Footer End -->

	<!-- Modal Start -->
    <?php $this->load->view('templatepelanggan/modal.php') ?>
	<!-- Modal End -->


	<!--====== Javascripts & Jquery ======-->
    <?php $this->load->view('templatepelanggan/js.php') ?>

	</body>
</html>