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
                <p><?=lang('Auth.enterEmailForInstructions')?></p>
              </div>
              
              <?= view('Myth\Auth\Views\_message_block') ?>

              <form action="<?= route_to('forgot') ?>" method="post" role="form">
                <?= csrf_field() ?>
                
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                  </div>
                  <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4"><?=lang('Auth.sendInstructions')?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?= $this->endSection() ?>