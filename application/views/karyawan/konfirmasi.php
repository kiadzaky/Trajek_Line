                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col lg-6">
                            <?= form_error('transaksi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>
<!--                            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTransaksiModal"><i class="fas fa-plus mr-2"></i>Tambah Pengambilan Baru</a> -->
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Transaksi</th>
                                        <th scope="col">NIK Pemesan</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Nomer Pemesan</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($konfirmasi as $t) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $t['id_transaksi']; ?></td>
                                            <td><?= $t['nik']; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['no_telepon']; ?></td>
                                            <td>
                                               <a href="<?= base_url('karyawan/updatekonfirmasi/' . $t['id_transaksi']); ?>" class="btn btn-small text-success"><i class="fas fa-check"></i> terima</a>
                                                    <a onclick="return confirm(`Anda ingin hapus?`)" href="<?= base_url('karyawan/hapuspemesanan/' . $t['id_transaksi']); ?>" class="btn btn-small text-danger"><i class="fas fa-times"></i> tolak</a>
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
                <div class="modal fade" id="newTransaksiModal" tabindex="-1" role="dialog" aria-labelledby="newTransaksiModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TransaksiModalLabel">Tambah Transaksi Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('karyawan/transaksi'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" placeholder="Id Transaksi">
                                        <?= form_error('id_transaksi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_pemesanan" id="id_pemesanan" class="form-control">
                                            <option value="">Pilih ID Pemesanan</option>
                                            <?php foreach ($idpemesanan as $b) : ?>
                                                <option value="<?= $b['id_pemesanan']; ?>"> <?= $b['id_pemesanan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_pemesanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" value="<?= $this->session->userdata('nip') ?>" class="form-control form-control-user" id="nip" name="nip" placeholder="NIP">
                                            <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" onkeyup="hitung()" class="form-control form-control-user" id="bayar" name="bayar" placeholder="Bayar">
                                            <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control form-control-user" id="kembali" name="kembali" placeholder="Kembali">
                                            <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
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

<script type="text/javascript">
  function hitung (){
  var harga = document.getElementById('harga').value;
  var bayar = document.getElementById('bayar').value;
  var hasilkembalian = parseInt(bayar) - parseInt(harga); 
  var kembalian = document.getElementById('kembali').value = hasilkembalian;
}
</script>