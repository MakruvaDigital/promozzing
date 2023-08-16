<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">

          <?php if( session()->getFlashdata('success') ): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-text"><strong>Selamat</strong> <?= session()->getFlashdata('success') ?></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php elseif( session()->getFlashdata('error') ): ?>
            <?php foreach( session()->getFlashdata('error') as $err ): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-text"><?= $err ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

          <form method="post" action="/profile/update">
            <div class="form-group">
                <label for="username" class="form-control-label">Username</label>
                <input class="form-control" name="username" type="text" value="<?= user()->toArray()['username'] ?>" id="username">
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input class="form-control" name="email" type="email" value="<?= user()->toArray()['email'] ?>" id="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-control-label">Password Baru (kosongkan jika tidak ingin ganti password)</label>
                <input class="form-control" name="password" type="password" id="password">
            </div>
            <button class="btn btn-primary btn-block">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>