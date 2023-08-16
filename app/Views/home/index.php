<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body py-6">
          <h2 class="text-center mb-4">Pilih Menu Dibawah</h2>
          <div class="d-flex justify-content-around">
            <a href="/headline" class="btn btn-primary btn-lg">Headline Generator</a>
            <a href="/copywriting" class="btn btn-primary btn-lg" id="_copywritingLink">Copywriting Generator</a>
            <a href="/quote" class="btn btn-primary btn-lg">Quote Generator</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script>
    document.getElementById('_copywritingLink').onclick = () => {
      localStorage.removeItem('copy-data');
    }
  </script>
<?= $this->endSection() ?>