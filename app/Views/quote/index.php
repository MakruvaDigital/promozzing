<?= $this->extend('template/layout') ?>

<?= $this->section('head') ?>
<style>
  .middle {
    position: absolute;
    right: 50%;
    top: 50%;
    -ms-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col card">
      <div class="card-body">

        <div class="text-center">

          <div style="height:40vh;" >
            <div class="middle">
              <div class="my-3" id="quote"></div>
              <div class="my-3" id="author"></div>
            </div>
          </div>
          
          <textarea id="quote_generate" class="d-none"></textarea>
          
          <button id="back" class="btn btn-primary" style="display:none">Back</button>
          <button id="generate_quote_btn" class="btn btn-primary">Generate</button>
          <button id="copy_quote_btn" class="btn btn-primary">Copy</button>

        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col card">
      <div class="card-body">
        <h1 class="text-center">Group Quote</h1>
        <hr>
        <div class="text-center">
          <button class="btn btn-primary my-1 my-quote-btn" id="quote1">100 serial motivasi</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote2">100  Kata motivasi Deny Santoso, Tung Desem Waringin, Ippho Santoso</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote3">100  kata motivasi dari tokoh sukses dunia</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote4">Nasihat RA Kartini</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote5">Nasihat Bung Hatta</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote6">Nasihat Bung Karno</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote7">Nasihat Bob Sadino</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote8">kata motivasi Merry Riana</button>
          <button class="btn btn-primary my-1 my-quote-btn" id="quote9">kata motivasi Tokoh sukses Dunia</button>
        </div>

      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script src="/assets/template/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="/assets/js/app/quotelist.js"></script>
  <script src="/assets/js/app/quote-script.js"></script>
  <script>
    generate()
    $('#generate_quote_btn').click(()=>{ 
      if (!isGroupSelected) {
        swal.fire('Pilih Group Quote terlebih dahulu')
        return false;
      }
      $.post('/quote/countsGeneratedQuotes', JSON.stringify({generateQuotes: true}), function(res){
        if( JSON.parse(res) ){
          generate() 
        }
      }, 'json')
    })

    $('#copy_quote_btn').click(()=>{ 
      if (!isGroupSelected) {
        swal.fire('Pilih Group Quote terlebih dahulu')
        return false;
      }
      $.post('/quote/saveAndCopyQuotes', JSON.stringify({quotes_text: $('#quote_generate').val()}), function(res){
        if( JSON.parse(res) ){
          copyFunc()
          swal.fire('Quote copied to clipboard')
        }
      }, 'json') 
    })
  </script>
<?= $this->endSection() ?>