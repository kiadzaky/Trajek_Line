                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('barang', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <?= validation_errors() ?>
                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newBarangModal"><i class="fas fa-plus mr-2"></i>Tambah Barang Baru</a>
                            <form action="<?= base_url('admin/cariBarang'); ?>" method="post">
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
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nopol</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Warna</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($barang as $b) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $b['id_barang']; ?></td>
                                            <td><?= $b['kategori']; ?></td>
                                            <td><?= $b['nopol']; ?></td>
                                            <td><?= $b['merk']; ?></td>
                                            <td><?= $b['jenis']; ?></td>
                                            <td><img height="50" width="50" src="../assets/img/barang/<?= $b['gambar'] ?>"></td>
                                            <td><?= $b['tahun']; ?></td>
                                            <td><?= $b['warna']; ?></td>
                                            <td><?= $b['harga']; ?></td>
                                            <td><?= $b['status']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/editbarang/' . $b['id_barang']); ?>" class="btn btn-small text-success"><i class="fas fa-edit"></i> edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('admin/hapusbarang/' . $b['id_barang']); ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> hapus</a>
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
                <div class="modal fade" id="newBarangModal" tabindex="-1" role="dialog" aria-labelledby="newBarangModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="barangModalLabel">Tambah Barang Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/barang'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $kode_otomatis ?>" placeholder="Id Barang">
                                        <?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <select name="kategori" id="kategori" class="form-control">
                                            <option value="">Pilih Kategori</option>
                                            <?php foreach ($kategori as $k) : ?>
                                                <option value="<?= $k['id_kategori']; ?>"> <?= $k['kategori']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Nomor Polisi">
                                        <?= form_error('nopol', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control form-control-user" id="gambar" name="gambar">
                                        <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="merk" name="merk" placeholder="Merk">
                                            <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="jenis" name="jenis" placeholder="Jenis">
                                            <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="warna" name="warna" placeholder="Warna">
                                            <?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="tahun" name="tahun" placeholder="Tahun">
                                            <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
                                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="keterangan" id="keterangan" placeholder="keterangan barang"></textarea>
                                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="spesifikasi" id="spesifikasi" placeholder="spesifikasi barang"></textarea>
                                        <?= form_error('spesifikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="tersedia" name="status" id="status" checked>
                                            <label class="form-check-label" for="status">
                                                Tersedia?
                                            </label>
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