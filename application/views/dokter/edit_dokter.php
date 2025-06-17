<style>
  /* Ubah font seluruh konten menjadi Times New Roman */
  body, .content-wrapper, .content-header, .card, form, label, input, select, textarea, button {
    font-family: "Times New Roman", Times, serif;
  }

  /* Warna biru menggantikan pink */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }
  .content-header {
    background-color: #cceeff; /* biru laut agak muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #d9f3ff; /* biru sangat muda */
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
    border-bottom: 1px solid #3399ff; /* biru sedang */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #003366; /* biru tua */
  }
  .form-control {
    border: 1px solid #66b2ff;
    background-color: #e0f7ff;
    color: inherit;
  }
  .form-control:focus {
    border-color: #3399ff;
    box-shadow: 0 0 5px #3399ff;
    background-color: #f0fbff;
    color: inherit;
  }
  .btn-primary {
    background-color: #3399ff;
    border-color: #0073e6;
    color: white;
  }
  .btn-primary:hover {
    background-color: #0073e6;
    border-color: #003366;
  }
  .btn-secondary {
    background-color: #99ccff;
    border-color: #66b2ff;
    color: #003366;
  }
  .btn-secondary:hover {
    background-color: #66b2ff;
    border-color: #0073e6;
    color: white;
  }
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Dokter</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Dokter</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <form action="<?= base_url('dokter/update/' . $dokter_pasien['iddokter']); ?>" method="POST">
                    <div class="form-group">
                        <label for="dokter">Dokter Spesialis</label>
                        <input type="text" class="form-control" name="dokter" id="dokter"
                            value="<?= $dokter_pasien['dokter']; ?>" placeholder="Masukkan nama spesialis dokter" required>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('dokter'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Optional footer content -->
            </div>
        </div>
    </section>
</div>
