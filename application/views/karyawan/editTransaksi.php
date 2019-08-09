                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($transaksi as $transaksi) ?>
                            <?= form_open_multipart('karyawan/update_transaksi'); ?>
                            <div class="form-group">
                                <label for="id_transaksi">Id Transaksi</label>
                                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $transaksi->id_transaksi; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_pemesanan">Id Pemesanan</label>
                                <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" value="<?= $transaksi->id_pemesanan; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="<?= $transaksi->nip; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="bayar">Bayar</label>
                                <input type="numeric" class="form-control" id="bayar" name="bayar" value="<?= $transaksi->bayar; ?>">
                                <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kembali">Kembali</label>
                                <input type="numeric" class="form-control" id="kembali" name="kembali" value="<?= $transaksi->kembali; ?>">
                                <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->