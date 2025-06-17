<style>
  /* Font Times New Roman untuk seluruh area konten */
  body, .content-wrapper, .content-header, .breadcrumb, .card, table, form, label, button, a {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* warna teks default */
  }

  /* Background dan elemen biru laut */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }
  .content-header {
    background-color: #add8e6; /* biru muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #d9f2ff; /* biru laut terang */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002244; /* biru tua lebih gelap */
  }
  .card {
    background-color: #f0fbff; /* biru sangat muda */
    border: 1px solid #66b2ff; /* biru muda */
  }
  .card-header {
    background-color: #66b2ff; /* biru muda */
    border-bottom: 1px solid #0073e6; /* biru lebih kuat */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #001933; /* biru sangat tua */
  }

  /* Tombol */
  .btn-primary {
    background-color: #0073e6;
    border-color: #0055aa;
    color: white;
  }
  .btn-primary:hover {
    background-color: #0055aa;
    border-color: #003366;
  }
  .btn-info {
    background-color: #99ccff;
    border-color: #66b2ff;
    color: #003366;
  }
  .btn-info:hover {
    background-color: #66b2ff;
    border-color: #0055aa;
    color: white;
  }
  .btn-danger {
    background-color: #336699;
    border-color: #224466;
    color: white;
  }
  .btn-danger:hover {
    background-color: #224466;
    border-color: #112233;
  }

  /* Table */
  table.table {
    background-color: #f5fcff; /* biru paling muda */
  }
  table.table th, table.table td {
    border: 1px solid #66b2ff;
  }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Daftar status</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List status</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          
          <?php if (!empty($kategori_pasien)): ?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($kategori_pasien as $b): ?>
                  <tr>
                    <td><?= $b['kategori']; ?></td>
                    <td>
                      <a href="<?= base_url('kategori/edit/'. $b['idkategori']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?= base_url('kategori/hapus/'. $b['idkategori']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin hapus?')">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p> Tidak ada kategori yang tersedia</p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
