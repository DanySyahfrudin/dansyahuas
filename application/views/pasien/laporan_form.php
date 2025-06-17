<style>
  /* Gunakan Times New Roman untuk semua teks */
  .content-wrapper, .content-wrapper * {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* teks tetap warna default */
  }

  /* Background dan border warna biru */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut (pengganti pink lembut) */
  }
  .content-header {
    background-color: #99ccff; /* biru muda (pengganti pink header) */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #cce6ff; /* biru lebih muda */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002147; /* lebih tua dari #003366 */
  }
  .card {
    background-color: #ccf2ff; /* biru sangat muda */
    border: 1px solid #99ccff; /* biru muda */
  }
  .card-header {
    background-color: #99ccff; /* biru muda */
    border-bottom: 1px solid #66b2ff; /* transisi ke biru sedikit lebih gelap */
  }
  .card-tools .btn-tool {
    color: #001f33; /* biru sangat tua */
  }
  .form-control {
    border: 1px solid #99ccff;
    background-color: #e0f7ff;
    color: initial;
  }
  .form-control:focus {
    border-color: #66b2ff;
    box-shadow: 0 0 5px #66b2ff;
    background-color: #f0fbff;
    color: initial;
  }
  .btn-primary {
    background-color: #3399ff; /* biru primer */
    border-color: #0073e6;
    color: white;
  }
  .btn-primary:hover {
    background-color: #0073e6;
    border-color: #0059b3;
  }
</style>

<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Filter Laporan Pasien</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
            <form method="post" action="<?= base_url('pasien/cetak_laporan') ?>">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="tanggal_dari">Dari Tanggal</label>
            <input type="date" name="tanggal_dari" id="tanggal_dari" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="tanggal_sampai">Sampai Tanggal</label>
            <input type="date" name="tanggal_sampai" id="tanggal_sampai" class="form-control" required>
        </div>
       
    </div>
    <button type="submit" class="btn btn-primary mt-2">Tampilkan Laporan</button>
</form>


            </div>

            <div class="card-footer">
                <!-- Optional footer content -->
            </div>
        </div>
    </section>
</div>
