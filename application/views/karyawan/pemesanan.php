                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('pemesanan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <?php echo validation_errors(); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPemesananModal"><i class="fas fa-plus mr-2"></i>Tambah Pesanan Baru</a>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <table class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Transaksi</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Tanggal Pesan</th>
                                        <th scope="col">Tanggal Pengambilan</th>
                                        <th scope="col">Tanggal Pengembalian</th>
                                        <th scope="col">Tipe Pembayaran</th>

                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Bayar</th>
                                        <th scope="col">Kembali</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pemesanan as $b) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $b['id_transaksi']; ?></td>
                                            <td><?= $b['nik']; ?></td>
                                            <td><?= $b['id_barang']; ?></td>
                                            <td><?= $b['tanggal_pesan']; ?></td>
                                            <td><?= $b['tanggal_pengambilan']; ?></td>
                                            <td><?= $b['tanggal_pengembalian']; ?></td>
                                            <td><?= $b['tipe_pembayaran']; ?></td>
                                            <td>Barang Belum Bayar</td>
                                            <td><?= $b['bayar']; ?></td>
                                            <td><?= $b['kembali']; ?></td>
                                            <td>
                                                <?php

                                                if ($b['keterangan'] == '2') {
                                                    ?>
                                                    <a href="<?= base_url('karyawan/editpemesanan/' . $b['id_transaksi']); ?>" c l a s s="btn btn-small text-success"><i class="fas fa-check"></i>kembalikan</a>
                                                <?php } elseif($b['keterangan']== '1') {
                                                    ?>
                                                    <a href="<?= base_url('karyawan/editpemesanan/' . $b['id_transaksi']); ?>" class="btn btn-small text-success"><i class="fas fa-check"></i> BAYAR</a>
                                                   
                                                <?php
                                                }else{
                                                    echo "TRANSAKSI SELESAI";
                                                }
                                                ?>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Modal -->
                <div class="modal fade" id="newPemesananModal" tabindex="-1" role="dialog" aria-labelledby="newPemesaananModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="PemesananModalLabel">Tambah Pemesanan Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('karyawan/pemesanan'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $kode_otomatis ?>" placeholder="Id Pemesanan">
                                        <?= form_error('id_pemesanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_barang" id="id_barang" class="form-control">
                                            <option value="">Pilih Barang</option>
                                            <?php foreach ($merk as $b) : ?>
                                                <option value="<?= $b['id_barang']; ?>"> <?= $b['merk']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group ">
                                        <h6>Tanggal Pengambilan</h6>
                                        <input type="date" class="form-control form-control-user" id="tanggal_pengambilan" name="tanggal_pengambilan" placeholder="Tanggal Pengambilan">
                                        <?= form_error('tanggal_pengambilan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group ">
                                        <h6>Tanggal Pengembalian</h6>
                                        <input type="date" class="form-control form-control-user" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                                        <?= form_error('tanggal_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <select name="tipe_pembayaran" id="tipe_pembayaran" class="form-control">
                                            <option value="">--Pilih Metode Pembayaran--</option>
                                            <option value="langsung">Langsung </option>
                                            <option value="transfer bank">Transfer Bank </option>
                                        </select>
                                        <?= form_error('tipe_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control form-control-user" id="bayar" name="bayar" placeholder="Bayar">
                                        <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control form-control-user" id="kembali" name="kembali" placeholder="Kembali">
                                        <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>