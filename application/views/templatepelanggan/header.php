<header class="header-section" style="background-color: #fff">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="<?php echo base_url() ?>" class="site-logo">
							<img src="<?php echo base_url() ?>/assets1/img/trajek.png" alt="" style="margin: 12px 0px 0px ">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" action="<?= base_url('index/cari'); ?>" method="post">
							<input type="text" name="keyword" placeholder="Search on trajek ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<!-- <button type="button" data-toggle="modal" data-target="#tambahModal">
                    Masuk
                  </button> -->
								
								<?php 
								if($this->session->userdata('email')==null){
									?>
<<<<<<< HEAD
									<a href="<?php echo base_url ('pelanggan/login') ?>"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Masuk</a>
=======
									<a href="<?php echo base_url ('pelanggan/login') ?>" data-toggle="modal"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Masuk</a>
>>>>>>> 0378d1333e043d7c1e7f9d4c9571af03c9a1ac4b
									<?php
								}else{
									if($this->session->userdata('id_jabatan')=='1'){
										$jabatan = 'admin';
									}
									elseif($this->session->userdata('id_jabatan')=='2'){
										$jabatan = 'karyawan';
									}
									elseif($this->session->userdata('id_jabatan')=='3'){
										$jabatan = 'pelanggan';
									}
									?>
<<<<<<< HEAD
									<a href="<?php echo base_url ('');echo $jabatan ?>/profil" data-toggle="modal"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Profil </a>
									<a href="<?php echo base_url ('auth/logout') ?> "><i class="flaticon-logout" style="margin: 0px 10px 0px; padding-left: 30px"></i>Logout</a>
=======
									<a href="<?php echo base_url ('pelanggan/profil') ?> " data-toggle="modal"><i class="flaticon-profile" style="margin: 0px 10px 0px; padding-left: 30px"></i>Profil</a>
									<a href="<?php echo base_url ('auth/logout') ?>"><i class="flaticon-logout" style="margin: 0px 10px 0px; padding-left: 30px"></i>Logout</a>
>>>>>>> 0378d1333e043d7c1e7f9d4c9571af03c9a1ac4b
									<!-- <?php //echo base_url($jabatan) ?>/ -->
									<?php
								}
								?>

							</div>
							<div class="up-item">
								<div class="shopping-card">
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</header>
		
			
	
