                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($pengembalian as $pengembalian) ?>
                            <?= form_open_multipart('karyawan/update_pengembalian'); ?>
                            <div class="form-group">
                                <label for="id_pengembalian">Id Pengembalian</label>
                                <input type="text" class="form-control" id="id_pengembalian" name="id_pengembalian" value="<?= $pengembalian->id_pengembalian; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="<?= $pengembalian->nip; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_transaksi">Id Transaksi</label>
                                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $pengembalian->id_transaksi; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_kembali">Tanggal Pengembalian</label>
                                <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $pengembalian->tanggal_kembali; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="denda">Denda</label>
                                <input type="text" class="form-control" id="denda" name="denda" value="<?= $pengembalian->denda; ?>">
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