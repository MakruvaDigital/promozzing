<?= $this->extend('template/layout') ?>

<?= $this->section('head') ?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h2>Copywriting Generator History</h2>
          <table id="copywritingTable" class="display" style="width:100%">
            <thead>
              <tr>
                <td>No.</td>
                <td>Tanggal</td>
                <td>Aksi</td>
              </tr>
            </thead>
          </table>  
          <table>
          <tbody>
              <tr>
                <td>Total</td>
                <td>: <?= $copywritings['total'] ?> kali</td>
                <td class="pl-4">Copywritings 3</td>
                <td>: <?= $copywritings['copywriting3'] ?> kali</td>
              </tr>
              <tr>
                <td>Copywritings 1</td>
                <td>: <?= $copywritings['copywriting1'] ?> kali</td>
                <td class="pl-4">Copywritings 4</td>
                <td>: <?= $copywritings['copywriting4'] ?> kali</td>
              </tr>
              <tr>
                <td>Copywritings 2</td>
                <td>: <?= $copywritings['copywriting2'] ?> kali</td>
                <td class="pl-4">Copywritings 5</td>
                <td>: <?= $copywritings['copywriting5'] ?> kali</td>
              </tr>
            </tbody>
          </table>      
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h2>Headline Generator History</h2>
          <table id="headlineTable" class="display" style="width:100%">
            <thead>
              <tr>
                <td>No.</td>
                <td>Tipe</td>
                <td>Headline</td>
                <td>Aksi</td>
              </tr>
            </thead>
          </table>  
          <table>
            <tbody>
              <tr>
                <td>Total</td>
                <td>: <?= $headlines['copied_headlines_total'] ?> kali</td>
                <td class="pl-4">Masalah</td>
                <td>: <?= $headlines['barriers'] ?> kali</td>
              </tr>
              <tr>
                <td>Masalah Mendesak</td>
                <td>: <?= $headlines['critical_issue'] ?> kali</td>
                <td class="pl-4">Tokoh</td>
                <td>: <?= $headlines['figure'] ?> kali</td>
              </tr>
              <tr>
                <td>Jangka Waktu</td>
                <td>: <?= $headlines['time_period'] ?> kali</td>
              </tr>
            </tbody>
          </table>      
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h2>Quotes Generator History</h2>
          <table id="quoteTable" class="display" style="width:100%">
            <thead>
              <tr>
                <td>No.</td>
                <td>Quote</td>
              </tr>
            </thead>
          </table>  
          <table>
            <tbody>
              <tr>
                <td>Digenerate sebanyak</td>
                <td>: <?= $quotes['generated_quotes_total'] ?> kali</td>
              </tr>
              <tr>
                <td>Dicopy sebanyak</td>
                <td>: <?= $quotes['copied_quotes_total'] ?> kali</td>
              </tr>
            </tbody>
          </table>      
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
  <script src="/assets/template/sweetalert2/sweetalert2.all.min.js"></script>
  <script>
    function convertType(type){
      switch (type) {
        case 'critical_issue':
          return 'Masalah Mendesak';
          break;
        case 'time_period':
          return 'Jangka Waktu';
        case 'barriers':
          return 'Masalah';
        case 'figure':
          return 'Tokoh';
        case 'other':
          return 'Lainnya';
        default:
          break;
      }
    }

    $(document).ready( function () {
        $('#copywritingTable').DataTable({
          ajax: "/history/getAllCopywritings",
          columns: [
            { "data": "num" },
            { "data": "created_at" },
            { "data": "text" },
          ],
          "columnDefs": [{
            targets: -1,
            orderable: false,
            render: function(data, type, row){
              return `<button data-text='${data}' class='btn btn-primary btn-sm viewCopywriting'>View</button>`
            }
          }],
          initComplete: function(settings, json) {
            $('.viewCopywriting').click(function(){
              localStorage.setItem('copy-data', JSON.stringify($(this).data('text')) )
              document.location.replace('/copywriting')
            })
          }
        });
    });
    
    $(document).ready( function () {
        $('#headlineTable').DataTable({
          ajax: "/history/getAllHeadlines",
          columns: [
            { "data": "num" },
            { "data": "type" },
            { "data": "text" },
            { "data": "text" }
          ],
          "columnDefs": [ {
            targets: 1,
            orderable: false,
            render: function(data, type, row){
              return convertType(data)
            }
          },{
            targets: -1,
            orderable: false,
            render: function(data, type, row){
              return "<button data-text='"+data+"' class='btn btn-primary btn-sm copyHeadline'>Copy</button>"
            }
          }],
          initComplete: function(settings, json){
            $('.copyHeadline').click(function(){
              text = $(this).data('text')
              var input = document.createElement('textarea');
              input.innerHTML = text;
              document.body.appendChild(input);
              input.select();
              var result = document.execCommand('copy');
              document.body.removeChild(input);
              swal.fire('Quote copied to clipboard')
            })
          }
        });
    });
    
    $(document).ready( function () {
        $('#quoteTable').DataTable({
          ajax: "/history/getAllQuotes",
          columns: [
            { "data": "num" },
            { "data": "text" },
          ]
        });
    });

    function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
      var targetId = "_hiddenCopyText_";
      var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
      var origSelectionStart, origSelectionEnd;
      if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
      } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
          var target = document.createElement("textarea");
          target.style.position = "absolute";
          target.style.left = "-9999px";
          target.style.top = "0";
          target.id = targetId;
          document.body.appendChild(target);
        }
        target.textContent = elem.textContent;

      }
      // select the content
      var currentFocus = document.activeElement;
      target.focus();
      target.setSelectionRange(0, target.value.length);

      // copy the selection
      var succeed;
      try {
        succeed = document.execCommand("copy");
      } catch(e) {
        succeed = false;
      }
      // restore original focus
      if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
      }

      if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
      } else {
        // clear temporary content
        target.textContent = "";
      }
    }
  </script>
<?= $this->endSection() ?>