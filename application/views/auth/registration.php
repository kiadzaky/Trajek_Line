   <div class="container">

       <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
           <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                   <div class="col-lg">
                       <div class="p-5">
                           <div class="text-center">
                               <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                           </div>
                           <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Nomor Induk Pegawai" value="<?= set_value('nip');?>">
                                   <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="nama_karyawan" name="nama_karyawan" placeholder="Nama lengkap" value="<?= set_value('nama_karyawan');?>">
                                   <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                               </div>
                               <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                       <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" value="<?= set_value('email');?>">
                                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="col-sm-6">
                                       <input type="text" class="form-control form-control-user" id="no_telepon" name="no_telepon" placeholder="Nomor telepon" value="<?= set_value('no_telepon');?>">
                                       <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat rumah" value="<?= set_value('alamat');?>">
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
                               <button type="submit" class="btn btn-danger btn-user btn-block">
                                   Akun Register
                               </button>
                           </form>
                           <hr>
                           <div class="text-center">
                               <a class="small" href="forgot-password.html">Lupa Password?</a>
                           </div>
                           <div class="text-center">
                               <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Login!</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </div>