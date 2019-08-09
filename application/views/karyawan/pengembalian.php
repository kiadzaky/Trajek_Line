                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('pengembalian', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>
                            
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Transaksi</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Pengembalian</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pengembalian as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $p['id_transaksi']; ?></td>
                                            <td><?= $p['nik']; ?></td>
                                            <td><?= $p['nama']; ?></td>
                                            <td><?= $p['tanggal_pengembalian']; ?></td>
                                            <td>
                                                <a href="<?= base_url('karyawan/editpemesanan/' . $p['id_transaksi']); ?>" class=" badge badge-success">KONFIRMASI</a>
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
                <div class="modal fade" id="newPengembalianModal" tabindex="-1" role="dialog" aria-labelledby="newPengembalianModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="PengembalianModalLabel">Tambah Pengembalian Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('karyawan/pengembalian'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id_pengembalian" name="id_pengembalian" placeholder="Id Pengembalian">
                                        <?= form_error('id_pengembalian', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" value="<?= $this->session->userdata('nip') ?>" class="form-control form-control-user" id="nip" name="nip" placeholder="NIP">

                                            <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_transaksi" id="id_transaksi" class="form-control">
                                            <option value="">Pilih ID Transaksi</option>
                                            <?php foreach ($idtransaksi as $b) : ?>
                                                <option value="<?= $b['id_transaksi']; ?>"> <?= $b['id_transaksi']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_transaksi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control form-control-user" id="denda" name="denda" placeholder="Denda">

                                            <?= form_error('denda', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
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