                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('karyawan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKaryawanModal"><i class="fas fa-plus mr-2"></i>Tambah Karyawan Baru</a>
                            <form action="<?= base_url('admin/cariKaryawan'); ?>" method="post">
                                <div class="input-group mb-3 mr-4 col-lg-3" style="margin-left: -11px">
                                    <input type="text" class="form-control" placeholder="Search..." name="keyword" id="keyword" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit" id="tombolCari"> <i class="fas fa-search fa-sm"></i></button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nip</th>
                                        <th scope="col">Nama Karyawan</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nomor Telepon</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Tanggal Buat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kwn as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $k['nip']; ?></td>
                                            <td><?= $k['nama']; ?></td>
                                            <td><?= $k['email']; ?></td>
                                            <td><?= $k['no_telepon']; ?></td>
                                            <td><?= $k['alamat']; ?></td>
                                            <td><img height="50" width="50" src="../assets/img/profile/<?= $k['foto'] ?>"></td>
                                            <td><?= $k['jabatan']; ?></td>
                                            <td><?= $k['tanggal_buat']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/editkaryawan/' . $k['nip']); ?>" class="btn btn-small text-success"><i class="fas fa-edit"></i> edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('admin/hapuskaryawan/' . $k['nip']); ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> hapus</a>
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
                <div class="modal fade" id="newKaryawanModal" tabindex="-1" role="dialog" aria-labelledby="newKaryawanModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="karyawanModalLabel">Tambah Karyawan Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('admin/karyawan'); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Nomor Induk Pegawai" value="<?= set_value('nip'); ?>">
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Karyawan" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Nomor Telepon" value="<?= set_value('no_telepon'); ?>">
                                        <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Konfirmasi password">
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