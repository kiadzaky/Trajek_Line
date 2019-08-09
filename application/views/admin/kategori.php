                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_error('kategori', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKategoriModal"><i class="fas fa-plus mr-2"></i>Tambah Kategori Baru</a>
                            <form action="<?= base_url('admin/cariKategori'); ?>" method="post">
                                <div class="input-group mb-3 mr-4 col-lg-6" style="margin-left: -11px">
                                    <input type="text" class="form-control" placeholder="Search..." name="keyword" id="keyword" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit" id="tombolCari"> <i class="fas fa-search fa-sm"></i></button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id Kategori</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as $kt) : ?>
                                        <tr>
                                            <td><?= $kt['id_kategori']; ?></td>
                                            <td><?= $kt['kategori']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/editkategori/' . $kt['id_kategori']); ?>" class="btn btn-small text-success"><i class="fas fa-edit"></i> edit</a>
                                                <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('admin/hapuskategori/' . $kt['id_kategori']); ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> hapus</a>
                                            </td>
                                        </tr>
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
                <div class="modal fade" id="newKategoriModal" tabindex="-1" role="dialog" aria-labelledby="newKategoriModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newKategoriModalLabel">Tambah Kategori Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('admin/kategori'); ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Nama Kategori">
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