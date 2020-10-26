<!DOCTYPE html>
<html lang="zxx">
<title>Trajek Line | Profil</title>
<?php $this->load->view('templatepelanggan/title.php') ?>

<body>
    <!-- Page Preloder -->
    
    <?php $this->load->view('templatepelanggan/preloader.php') ?>

    <!-- Header section -->
<?php $this->load->view('templatepelanggan/header.php') ?>
<?php $this->load->view('templatepelanggan/menubar.php') ?>
    
    <!-- Body Start -->
    
    
<div class="container emp-profile" style="padding-top: 50px">
            <form method="post">
            <?php foreach($karyawan as $kr){ ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo base_url('assets/img/profile/'.$kr->foto)?>" alt=""/>
                           <!--<div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <!-- <p class="profile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Histori Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href ="<?php echo base_url('pelanggan/editprofil') ?>"> Edit Profil</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8" style="margin-top: -60px">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kr->nama ?></p>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>E-Mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kr->email ?></p>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kr->no_telepon ?></p>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-top: 20px;  ">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $kr->alamat ?></p>
                                            </div>
                                        </div>
                            
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php foreach($profile as $pr){ ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id Transaksi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $pr['id_transaksi'] ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NIK</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $pr['nik'] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        if($pr['konfirmasi']=='tidak'){
                                            ?>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="color: red;">Belum dikonfirmasi, tunggu dihubungi Trajek</p>
                                            </div>
                                        </div>
                                            <?php
                                        }else{
                                            ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bayar</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $pr['bayar'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kembali</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo $pr['kembali'] ?></p><br>
                                            </div>
                                        </div>
                                            <?php
                                        }
                                        ?>
                                        
                                <?php } ?>

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