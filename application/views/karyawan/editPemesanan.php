                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($pemesanan as $pemesanan) ?>
                            <?= form_open_multipart('karyawan/update_pemesanan'); ?>
                            <div class="form-group">
                                <label for="id_transaksi">Id Transaksi</label>
                                <input type="text" class="form-control" id="id_pemesanan" name="id_transaksi" value="<?= $pemesanan->id_transaksi; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemesanan->nik; ?>" readonly>
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nik">Nama Pemesan</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemesanan->nama; ?>" readonly>
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="id_barang">Id Barang</label>
                                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $pemesanan->id_barang; ?>" readonly>
                                <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Merk Barang</label>
                                <input type="text" class="form-control" id="harga" name="id_barang" value="<?= $pemesanan->merk; ?>" readonly>
                                <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                <div class="form-group">
                                <label for="nama_barang">Harga Sewa</label>
                                <input type="" class="form-control" id="harga" name="harga" value="<?= $pemesanan->harga; ?>" readonly>
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pesan">Tanggal Pesan</label>
                                <input type="text" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?= $pemesanan->tanggal_pesan; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengambilan">Tanggal Pengambilan</label>
                                <input type="date" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" value="<?= $pemesanan->tanggal_pengambilan; ?>">
                                <?= form_error('tanggal_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?= $pemesanan->tanggal_pengembalian; ?>">
                                <?= form_error('tanggal_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tipe_pembayaran">Tipe Pembayaran</label>
                                <input type="text" class="form-control" id="tipe_pembayaran" name="tipe_pembayaran" value="<?= $pemesanan->tipe_pembayaran; ?>">
                                <?= form_error('tipe_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <?php 
                            if($pemesanan->keterangan == 2){
                                ?>
                            <div class="form-group">
                                <label for="bayar">Bayar</label>
                                <input type="" class="form-control" onkeyup="hitung()" id="bayar" name="bayar" value="<?= $pemesanan->bayar; ?>" readonly="">
                                <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kembali">Kembali</label>
                                <input type="text" class="form-control" id="kembali" name="kembali" value="<?= $pemesanan->kembali; ?>" readonly="">
                                <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>    
                                <div class="form-group">
                                <label for="kembali">Denda</label>
                                <input type="text" class="form-control" id="kembali" name="denda" value="<?= $pemesanan->denda; ?>">
                                <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <?php
                            }else{ // belum bayar denda
                                ?>
                            <div class="form-group">
                                <label for="bayar">Bayar</label>
                                <input type="" class="form-control" onkeyup="hitung()" id="bayar" name="bayar" value="<?= $pemesanan->bayar; ?>">
                                <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kembali">Kembali</label>
                                <input type="text" class="form-control" id="kembali" name="kembali" value="<?= $pemesanan->kembali; ?>">
                                <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                                <?php
                            }
                            ?>
                            
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12">
                                    <?php ;
                                    if ($pemesanan->keterangan == '2') {
                                        ?>
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-primary">Bayar</button>
                                    <?php } ?>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->