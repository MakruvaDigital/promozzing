<?= $this->extend('template/layout') ?>

<?= $this->section('head') ?>
<style>
  .nav-pills .nav-link.active {
    background-color: var(--orange);
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
    <div class="nav-wrapper">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 headlineType active" data-type="critical_issue" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                  Masalah Penting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 headlineType" data-type="time_period" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                  Waktu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 headlineType" data-type="barriers" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                  Masalah
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 headlineType" data-type="figure" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">
                  Tokoh
                </a>
            </li>
        </ul>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="tab-content" id="myTabContent">


                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                  <div class="d-flex justify-content-between">
                    <h5>Headline Masalah Penting</h5>
                    <button class="btn btn-primary change"></button>
                  </div>
                  
                  <div class="mb-3">
                    <label for="input1" class="form-label">Masalah Penting</label>
                    <input class="form-control" type="text" id="input1" placeholder="Muka Anda Berjerawat">
                  </div>
                  <div class="mb-3">
                    <label for="input2" class="form-label">Masalah yang tidak disukai</label>
                    <input class="form-control" type="text" id="input2" placeholder="Beli Kosmetik Mahal">
                  </div>
                  <div class="mb-3">
                    <label for="input3" class="form-label">Waktu menyelesaikan masalah</label>
                    <input class="form-control" type="text" id="input3" placeholder="Kurang 1 bulan">
                  </div>
                  <h4>Generated Headline</h4>
                  <div class="head-container1"></div>
                  <button class="btn btn-primary change"></button>

                </div>
                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">

                  <div class="d-flex justify-content-between">
                    <h5>Headline Waktu</h5>
                    <button class="btn btn-primary change"></button>
                  </div>
                  
                  <div class="mb-3">
                    <label for="input4" class="form-label">Solusi yang diinginkan</label>
                    <input class="form-control" type="text" id="input4" placeholder="TINGKATKAN ENGGAGEMENT IKLAN ANDA">
                  </div>
                  <div class="mb-3">
                    <label for="input5" class="form-label">Masalah yang tidak disukai</label>
                    <input class="form-control" type="text" id="input5" placeholder="BAYAR SEMINAR MAHAL">
                  </div>
                  <div class="mb-3">
                    <label for="input6" class="form-label">Waktu menyelesaikan masalah</label>
                    <input class="form-control" type="text" id="input6" placeholder="KURANG 5 MENIT">
                  </div>
                  <h4>Generated Headline</h4>
                  <div class="head-container2"></div>
                  <button class="btn btn-primary change"></button>

                </div>
                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">

                  <div class="d-flex justify-content-between">
                    <h5>Headline Masalah</h5>
                    <button class="btn btn-primary change"></button>
                  </div>
                  
                  <div class="mb-3">
                    <label for="input7" class="form-label">Masalah yang ingin diselesaikan</label>
                    <input class="form-control" type="text" id="input7" placeholder="HAPUSKAN HUTANG ANDA">
                  </div>
                  <div class="mb-3">
                    <label for="input8" class="form-label">Waktu penyelesaian masalah</label>
                    <input class="form-control" type="text" id="input8" placeholder="5 TAHUN">
                  </div>
                  <div class="mb-3">
                    <label for="input9" class="form-label">Kemampuan/Cara Menyelesaikan</label>
                    <input class="form-control" type="text" id="input9" placeholder="GAJI UMR">
                  </div>
                  <h4>Generated Headline</h4>
                  <div class="head-container3"></div>
                  <button class="btn btn-primary change"></button>

                </div>
                <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">

                  <div class="d-flex justify-content-between">
                    <h5>Headline Tokoh</h5>
                    <button class="btn btn-primary change"></button>
                  </div>

                  <div class="mb-3">
                    <label for="input10" class="form-label">Solusi yang diinginkan</label>
                    <input class="form-control" type="text" id="input10" placeholder="IGIN SUKSES BERBISNIS">
                  </div>
                  <div class="mb-3">
                    <label for="input11" class="form-label">Tokoh sukses</label>
                    <input class="form-control" type="text" id="input11" placeholder="JACK MA">
                  </div>
                  <div class="mb-3">
                    <label for="input12" class="form-label">Masalah yang tidak disukai</label>
                    <input class="form-control" type="text" id="input12" placeholder='KELUAR MODAL BESAR'>
                  </div>
                  <h4>Headline Jadi</h4>
                  <div class="head-container4"></div>
                  <button class="btn btn-primary change"></button>

                </div>

                
            </div>
        </div>
    </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script src="/assets/template/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="/assets/js/app/headline-script.js"></script>
<?= $this->endSection() ?>