<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 pt-lg-8"></div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small><?=lang('Auth.enterCodeEmailPassword')?></small>
              </div>

              <?= view('Myth\Auth\Views\_message_block') ?>

              <form action="<?= route_to('reset-password') ?>" method="post">

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                    <input type="token" class="form-control <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>" name="token"  placeholder="<?=lang('Auth.token')?>" value="<?= old('token') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email" value="<?= old('email') ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.newPassword')?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.newPasswordRepeat')?>">
                  </div>
                </div>
                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4"><?=lang('Auth.resetPassword')?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>