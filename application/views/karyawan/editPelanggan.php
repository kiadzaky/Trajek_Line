                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($pelanggan as $p) ?>
                            <?= form_open_multipart('karyawan/update_pelanggan'); ?>
                            <div class="form-group">
                                <label for="nik">Nomor Induk Kependudukan</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $p->nik; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $p->nama; ?>">
                                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $p->email; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $p->no_telepon; ?>">
                                <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Rumah</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $p->alamat; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">Foto</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profile/') . $p->foto; ?>" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
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