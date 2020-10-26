                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?php foreach ($barang as $barang) ?>
                            <?= form_open_multipart('admin/update_barang'); ?>
                            <div class="form-group">
                                <label for="id_barang">Id Barang</label>
                                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $barang->id_barang; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_kategori"> Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <option value="<?= $barang->id_kategori ?>"><?= $barang->kategori ?></option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nopol">Nomor Polisi</label>
                                <input type="text" class="form-control" id="nopol" name="nopol" value="<?= $barang->nopol; ?>">
                                <?= form_error('nopol', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="<?= $barang->merk; ?>">
                                <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $barang->jenis; ?>">
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/barang/') . $barang->gambar; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar">Pilih file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $barang->tahun; ?>">
                                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" id="warna" name="warna" value="<?= $barang->warna; ?>">
                                <?= form_error('warna', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang->harga; ?>">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="<?= $barang->status; ?>" readonly>
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
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