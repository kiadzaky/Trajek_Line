<!DOCTYPE html>
<html lang="zxx">
<?php $this->load->view('templatepelanggan/title.php') ?>

<body>
    <!-- Page Preloder -->
    
    <?php $this->load->view('templatepelanggan/preloader.php') ?>

    <!-- Header section -->
<?php $this->load->view('templatepelanggan/header.php') ?>
<?php $this->load->view('templatepelanggan/menubar.php') ?>
    
    <!-- Body Start -->
    
    
<div class="container emp-profile" style="padding-top: 50px">
            <form method="post" action="<?php echo base_url('Pelanggan/updateprofil') ?>">
                <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card" style="  
                        background: #f0f0f0;
                        border-radius: 27px;
                        overflow: hidden;">
                            <div class="card-body">
                                    <label>Upload Foto Profil</label>  
                                	<input id="foto" type="file" name="foto" style="">
                                	<div class="row text-center justify-content-md-center" ></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <!-- <p class="profile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8" style="margin-top: -150px; padding-left: 50px">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php foreach($karyawan as $kr){ ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type= "text" name ="nmpelanggan" class="form-control form-control-line" value= "<?php echo $kr->nama ?>">
                                            </div>
                                        
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>E-Mail</label>
                                            </div>
                                            <div class="col-md-6">
                                               <input type= "text" name ="email" class="form-control form-control-line" value= "<?php echo $kr->email ?>" readonly> 
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type= "text" name ="phone" class="form-control form-control-line" value= "<?php echo $kr->no_telepon ?>">
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                               <input type= "text"  name ="alamat" class="form-control form-control-line" value= "<?php echo $kr->alamat ?>">
                                            </div>
                                        </div>
                            <br>
                            </div>
                            <div class="col-md-3" style="margin-left: -20px; padding-bottom: 50px">
                                <input type="submit" class="profile-edit-btn" style="color: black" name="btnAddMore" value="Simpan"/>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </form>           
        </div>
    <!-- Body End -->
	<!-- Footer Start -->
	<?php $this->load->view('templatepelanggan/footer.php') ?>
    <!-- Footer section end -->
    <?php $this->load->view('templatepelanggan/modal.php') ?>

    

    <!--====== Javascripts & Jquery ======-->
    <?php $this->load->view('templatepelanggan/js.php') ?>

	</body>
</html>