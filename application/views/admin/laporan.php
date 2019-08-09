                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                        <div class="col-lg">
                            <?= form_error('laporan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

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
                                        <th scope="col">Denda</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($laporan as $b) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $b['id_transaksi']; ?></td>
                                            <td><?= $b['nik']; ?></td>
                                            <td><?= $b['id_barang']; ?></td>
                                            <td><?= $b['tanggal_pesan']; ?></td>
                                            <td><?= $b['tanggal_pengambilan']; ?></td>
                                            <td><?= $b['tanggal_pengembalian']; ?></td>
                                            <td><?= $b['tipe_pembayaran']; ?></td>
                                            <td>
                                                <?php if ($b['keterangan'] == '1') {
                                                    echo 'Merah';
                                                } elseif ($b['keterangan'] == '2') {
                                                    echo 'Hijau';
                                                } else {
                                                    echo 'Biru';
                                                }
                                                ?>

                                            </td>
                                            <td><?= $b['bayar']; ?></td>
                                            <td><?= $b['kembali']; ?></td>
                                            <td><?= $b['denda']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-small text-primary"><i class="fas fa-print"></i> Print</a>
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