<!DOCTYPE html>
<html lang="zxx">
<?php foreach ($barang as $b) { ?>
    <title>Trajek Line | <?= $b['merk'] ?></title>
    <?php $this->load->view('templatepelanggan/title.php') ?>
    <?php $this->load->view('templatepelanggan/preloader.php') ?>
    <!-- Header section -->
    <?php $this->load->view('templatepelanggan/header.php') ?>
    <!-- Header section end -->
    <?php $this->load->view('templatepelanggan/menubar.php') ?>


    <!-- Page info -->
    <!-- <div class="page-top-info">
        <div class="container">
            <h4>Category PAge</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Shop</a>
            </div>
        </div>
    </div> -->
    <!-- Page info end -->


    <!-- product section -->
    <section class="product-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="<?php echo base_url() ?>assets/img/barang/<?= $b['gambar'] ?>" alt="">
                    </div>
                    <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                        <div class="product-thumbs-track">
                            <div class="pt active" data-imgbigurl="<?php echo base_url() ?>assets/img/barang/<?= $b['gambar'] ?>"><img src="<?php echo base_url() ?>assets/img/barang/<?= $b['gambar'] ?>" alt=""></div>
                            <!-- <div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 product-details">
                    <form action="<?php echo base_url('index/pesan') ?>" method="post">
                        <h2 class="p-title"><?= $b['merk'] ?></h2><input type="hidden" name="merk" value="<?= $b['merk'] ?>">
                        <h3 class="p-price">Rp. <?= $b['harga'] ?> / jam</h3><input type="hidden" name="harga" value="<?= $b['harga'] ?>"><input type="hidden" name="gambar" value="<?= $b['gambar'] ?>">
                        <!-- <h3 class="p-price">Uang Muka Rp. <?= $b['harga'] * (60 / 100) ?></h3> -->
                        <h4 class="p-stock">Available: <span>In Stock</span></h4>
                        <div class="form-group" style="margin-bottom: 20px; ">
                                        <label style="font-size: 18px">Pilih Tanggal Sewa</label><br>
                                            <input type="date" name="tanggal_pengambilan" value="tanggal_sewa" class="col-lg-5 form-control form-control-line" style="margin-left: 20px" required="">
                        </div>
                        <?php if ($this->session->userdata('email') != null) {
                            ?>
                            <input type="hidden" name="kodebarang" value="<?= $b['id_barang'] ?>">
                    <form action="<?php echo base_url('index/cart')?>" method="post">
                    <h2 class="p-title"><?= $b['merk'] ?></h2><input type="hidden" name="merk" value="<?= $b['merk'] ?>" >
                    <h3 class="p-price">Rp. <?= $b['harga'] ?> / jam</h3><input type="hidden" name="harga" value="<?= $b['harga'] ?>" ><input type="hidden" name="gambar" value="<?= $b['gambar'] ?>">
                    <h3 class="p-price">Uang Muka Rp. <?= $b['harga']*(60/100) ?></h3>
                    <h4 class="p-stock">Available: <span>In Stock</span></h4>
                    <div class="p-rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o fa-fade"></i>
                    </div>
                    <div class="p-review">
                        <a href="">3 reviews</a>|<a href="">Add your review</a>
                    </div>
                    <?php if($this->session->userdata('nik')!=null){
                        ?>
                            <input type="hidden" name="kodebarang" value="<?= $b['id_barang'] ?>">
                        <button class="site-btn">PESAN SEKARANG</button>
                        </form>
                    <?php
                    } else {
                        ?>
                        <a href="<?php echo base_url ('pelanggan/login') ?>" class="site-btn">Pesan Login Dahulu</a>
                    <?php
                    } ?>

                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">keterangan</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p style="color: black"><?= $b['penjelasan'] ?>
                                    <p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingTwo">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Spesifikasi </button>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body">
                                    <!-- <img src="./img/cards.png" alt=""> -->
                                    <p style="color: black;"><?= $b['spesifikasi']?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                            </div> -->
                            <!-- <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body">
                                    <h4>7 Days Returns</h4>
                                    <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div> -->
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="social-sharing">
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-pinterest"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- RELATED PRODUCTS section -->
    <!-- <?php //$this->load->view('templatepelanggan/related-product.php') ?> -->
    <!-- RELATED PRODUCTS section end -->


    <!-- Footer section -->
    <?php $this->load->view('templatepelanggan/footer.php') ?>
    <!-- Footer section end -->
    <?php $this->load->view('templatepelanggan//modal.php') ?>


    <!--====== Javascripts & Jquery ======-->
    <?php $this->load->view('templatepelanggan/js.php') ?>
    </body>

    </html>
<?php }} ?>