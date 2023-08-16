<?= $this->extend('template/layout') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body py-6">

        <div class="text-center">
          <h2>Daftar User</h2>
          <a href="<?= site_url('/home/download_users_data') ?>" class="btn btn-primary w-25">Unduh Data</a>
        </div>

        <table id="headlineTable" class="display" style="width:100%">
          <thead>
            <tr>
              <td>No.</td>
              <td>Tipe</td>
              <td>Headline</td>
              <td>Status</td>
              <td>Tindakan</td>
            </tr>
          </thead>
        </table>

      </div>
    </div>
  </div>
  <div id="copywritingNavLink" class="d-none"></div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="<?= site_url('/assets/template/sweetalert2/sweetalert2.all.min.js') ?>"></script>
<script>
  $(document).ready(function() {
    $('#headlineTable').DataTable({
      ajax: "/home/getAllUsers",
      columns: [{
          "data": "num"
        },
        {
          "data": "email"
        },
        {
          "data": "username"
        },
        {
          "data": "status"
        },
        {
          "data": "tindakan"
        },
      ],
      "columnDefs": [{
        targets: -2,
        orderable: false,
        render: function(data, type, row) {
          return `<select class="form-control activate" data-email="${row.email}"> 
                    <option value="1" ${data?'selected':null} >Aktif</option>
                    <option value="0" ${!data?'selected':null} >Non Aktif</option>
                  </select>`
        }
      }, {
        targets: -1,
        orderable: false,
        render: function(_, _, row) {
          return `<div class="text-center">
                  <button type="button" data-username="${row.username}" data-id="${row.id}" class="btn btn-sm btn-danger btn-delete">delete</button>
                </div>`
        }
      }],
      drawCallback: function(settings, json) {
        $('.activate').change(function() {
          $.post('/home/activateUser', JSON.stringify({
            email: $(this).data('email'),
            activate: this.value
          }), () => {
            if (this.value == 1) {
              swal.fire(`User dengan email ${$(this).data('email')} telah di aktifkan`)
            } else {
              swal.fire(`User dengan email ${$(this).data('email')} telah di nonaktifkan`)
            }
          }, 'json')
        })

        $('.btn-delete').click(function() {
          let username = $(this).data('username');
          Swal.fire({
            title: `User ${username} Akan Dihapus, Lanjutkan?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus user!',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.value) {
              $.get(`<?= site_url('/home/deleteUser') ?>/${$(this).data('id')}`).then(res=>{
                Swal.fire('Deleted!', 'User Berhasil Dihapus.', 'success')
                window.location.reload()
              })
            }
          })
        })
      }
    });
  });
</script>
<?= $this->endSection() ?>