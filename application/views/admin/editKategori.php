                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-3">
                            <?php foreach ($kategori as $kategori) ?>
                            <?= form_open_multipart('admin/update_kategori'); ?>
                            <div class="form-group">
                                <label for="id_kategori">Id Kategori</label>
                                <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $kategori->id_kategori; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kategori">id_kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori->kategori; ?>">
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
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