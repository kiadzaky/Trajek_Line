                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $karyawan['foto']; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $karyawan['nama']; ?></h5>
                                    <p class="card-text"><?= $karyawan['email']; ?></p>
                                    <p class="card-text"><?= $karyawan['no_telepon']; ?></p>
                                    <p class="card-text"><?= $karyawan['alamat']; ?></p>
                                    <p class="card-text"><small class="text-muted"> Tanggal Buat <?= $karyawan['tanggal_buat']; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <td>
                        <a href="karyawan/edit" class=" btn btn-primary"><i class="fas fa-user-edit"></i> Edit Profil</a>
                        <a href="<?php echo base_url() ?>karyawan/changepassword" class=" btn btn-warning"><i class="fas fa-key"></i> Ubah Password</a>
                    </td>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->