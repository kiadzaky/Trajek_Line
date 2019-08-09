<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" style="position: absolute; ">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 40px 34px 0;
  background: #f0f0f0;
  border-radius: 27px;
  overflow: hidden;">
          <div class="modal-header" style="text-align: center;">
          <h4 class="modal-title" id="judulModal">Login</h4>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="<?= base_url('pelanggan/login'); ?>">
                <div class="form-group">
                <label for="kdbarang">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control form-control-line">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="kdbarang">Password</label>
                <input type="password" name="password" id="password" placeholder="* * * * *" class="form-control" style="animation: linear;" name = "password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div><a href="#"><!-- <style>a:hover{
              color: red; background: transparent; text-decoration: underline;}</style> --> <h8 style="color: #F42E3E; padding-left: 140px">Lupa Password?</h8></a>
              </div>
              <div><a href="<?php echo base_url() ?>index/register"><!-- <style>a:hover{
              color: red; background: transparent; text-decoration: underline;}</style> --> <h8 style="color: #F42E3E; margin-left: 100px">Belum Punya Akun? Daftar!</h8></a>
              </div>
          </div>
          <div class="modal-footer" style="padding-right: 120px">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <button class="site-btn">MASUK</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->