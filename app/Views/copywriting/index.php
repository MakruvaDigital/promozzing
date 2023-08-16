<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col card">
      <div class="card-body">

        <div class="text-center collapse">
          <button class="btn btn-primary" type="button" id="back-to-copy-gen">Generate New Copywriting</button>
        </div>

        <div class="collapse show" id="copy-gen-input">
          <h4 class="text-center">Copywriting Generator</h4>
    
          <div class="mb-3">
            <label for="sc_headline" class="form-label">1. Headline</label>
            <input type="text" id="sc_headline" name="sc_headline" class="form-control sc"  placeholder="Masukkan Headline" >
          </div>
          <div class="mb-3">
            <label for="sc_sub_headline" class="form-label">2. Sub-Headline</label>
            <input type="text" id="sc_sub_headline" name="sc_sub_headline" class="form-control sc" placeholder="Masukkan Sub-Headline" >
          </div>
          <div class="mb-3">
            <label for="sc_nama_produk" class="form-label">3. Nama Produk</label>
            <input type="text" id="sc_nama_produk" name="sc_nama_produk" class="form-control sc" placeholder="Masukkan Nama Produk">
          </div>
          <div class="mb-3">
            <label for="sc_penerangan" class="form-label">4. Keterangan</label>
            <div>
              <input type="text" id="sc_penerangan" name="sc_penerangan[]" class="form-control sc" placeholder="Masukkan Keterangan 1">
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-sm mt-1 addKeterangan" data-num="2" data-max="3">Tambah input</button>
            </div>
            <!-- S -->
          </div>
          <div class="mb-3">
            <label for="sc_harga" class="form-label">5. Harga</label>
            <input type="text" id="sc_harga" name="sc_harga" class="form-control sc" placeholder="Masukkan Harga">
          </div>
          <div class="mb-3">
            <label for="sc_kelebihan" class="form-label">6. Kelebihan produk</label>
            <div>
              <input type="text" id="sc_kelebihan" name="sc_kelebihan[]" class="form-control sc" placeholder="Masukkan Kelebihan 1">
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-sm mt-1 addKeterangan" data-num="2" data-max="7">Tambah input</button>
            </div>
            <!-- S -->
          </div>
          <div class="mb-3">
            <label for="sc_freegift" class="form-label">7. Hadiah Gratis</label>
            <div>
              <input type="text" id="sc_freegift" name="sc_freegift[]" class="form-control sc mt-1" placeholder="Masukkan Hadiah Gratis 1">
              <div class="input-group mt-1">
                <input type="text" name="sc_freegift[]" class="form-control sc" placeholder="Masukkan Hadiah Gratis 2">
                <div class="input-group-append">
                  <button class="btn btn-info removeInput" type="button">Remove</button>
                </div>
              </div>
              <div class="input-group mt-1">
                <input type="text" name="sc_freegift[]" class="form-control sc" placeholder="Masukkan Hadiah Gratis 3">
                <div class="input-group-append">
                  <button class="btn btn-info removeInput" type="button">Remove</button>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-sm mt-1 addKeterangan" data-num="4" data-max="7">Tambah input</button>
            </div>
            <!-- S -->
          </div>
          <div class="mb-3">
            <label for="sc_masalah" class="form-label">8. Masalah yang ingin diselesaikan</label>
            <div>
              <input type="text" id="sc_masalah" name="sc_masalah[]" class="form-control sc mt-1" placeholder="Masukkan Masalah 1">
              <div class="input-group mt-1">
                <input type="text" name="sc_freegift[]" class="form-control sc" placeholder="Masukkan Masalah 2">
                <div class="input-group-append">
                  <button class="btn btn-info removeInput" type="button">Remove</button>
                </div>
              </div>
              <div class="input-group mt-1">
                <input type="text" name="sc_freegift[]" class="form-control sc" placeholder="Masukkan Masalah 3">
                <div class="input-group-append">
                  <button class="btn btn-info removeInput" type="button">Remove</button>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-sm mt-1 addKeterangan" data-num="4" data-max="7">Tambah input</button>
            </div>
            <!-- S -->
          </div>
          <div class="mb-3">
            <label for="sc_testimoni" class="form-label">9. Testimoni</label>
            <div>
              <input type="text" id="sc_testimoni" name="sc_testimoni[]" class="form-control sc" placeholder="Masukkan Testimoni 1">
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-sm mt-1 addKeterangan" data-num="2" data-max="3">Tambah input</button>
            </div>
            <!-- S -->
          </div>
          <div class="mb-3">
            <label for="sc_jaminan" class="form-label">10. Jaminan</label>
            <input type="text" id="sc_jaminan" name="sc_jaminan" class="form-control sc" placeholder="Masukkan Jaminan">
          </div>
          <div class="mb-3">
            <label for="sc_telephone" class="form-label">11. Nomor Telepon</label>
            <input type="text" id="sc_telephone" name="sc_telephone" class="form-control sc" placeholder="Masukkan Nomor Telepon">
          </div>
          <div class="mb-3">
            <label for="sc_website" class="form-label">12. Website</label>
            <input type="text" id="sc_website" name="sc_website" class="form-control sc" placeholder="Masukkan Alamat Website">
          </div>
          <div class="mb-3">
            <label for="sc_ps" class="form-label">13. PS</label>
            <input type="text" id="sc_ps" name="sc_ps" class="form-control sc" placeholder="Masukkan PS">
          </div>
        </div>


        <div class="text-center">
          <button class="btn btn-primary collapse show" type="button" id="generate_copywriting">Generate Copywriting</button>
        </div>

        <div class="collapse row" id="copy-gen-output">
          <div class="col">
            <div class="mt-3">
              <select id="resultType" class="form-control text-center">
                <option value="1">Whatsapp/Telegram</option>
                <option value="2">Facebook</option>
                <option value="3">Facebook Ads</option>
                <option value="4">Facebook Ads2</option>
              </select>
            </div>
            <div class="nav-wrapper">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                    Copywriting 1
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                    Copywriting 2
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                    Copywriting 3
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                    Copywriting 4
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                    Copywriting 5
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div id="nav-copy1"></div>
                <textarea id="nav-copy1-input" class="d-none"></textarea>
              </div>
              <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <div id="nav-copy2"></div>
                <textarea id="nav-copy2-input" class="d-none"></textarea>
              </div>
              <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                <div id="nav-copy3"></div>
                <textarea id="nav-copy3-input" class="d-none"></textarea>
              </div>
              <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                <div id="nav-copy4"></div>
                <textarea id="nav-copy4-input" class="d-none"></textarea>
              </div>
              <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                <div id="nav-copy5"></div>
                <textarea id="nav-copy5-input" class="d-none"></textarea>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" id="copy_btn">Copy</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="/assets/template/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="/assets/js/app/copy-script.js"></script>
  <script src="/assets/js/app/my-copy-script.js"></script>
<?= $this->endSection() ?>