<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <p>Masuk dengan kredensial</p>
              </div>
              
              <?= view('Myth\Auth\Views\_message_block') ?>

              <form action="<?= route_to('login') ?>" method="post" role="form">
                <?= csrf_field() ?>

                
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Email or phone">
                  </div>
                  <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                  </div>
                  <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                  </div>
                </div>
              
                <?php if ($config->allowRemembering): ?>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" <?php if(old('remember')) : ?> checked <?php endif ?> id="customCheckLogin" >
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted"><?=lang('Auth.rememberMe')?></span>
                  </label>
                </div>
                <?php endif; ?>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Masuk</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="/forgot" class="text-primary"><small>Lupa password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="/register" class="text-primary"><small>Buat akun baru</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?= $this->endSection() ?>