<style>
  /* Ubah font seluruh konten menjadi Times New Roman */
  body, .content-wrapper, .content-header, .card, form, label, input, select, textarea, button {
    font-family: "Times New Roman", Times, serif;
  }

  /* Background biru laut */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }
  .content-header {
    background-color: #66b2ff; /* biru muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #b3e0ff; /* biru lebih muda */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002244; /* biru tua gelap */
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
    background-color: #f5fcff;
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
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form dokter</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">dokter</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Tambah dokter</h3>
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
        <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <!-- Form -->
        <form action="<?= base_url('dokter/insert'); ?>" method="POST">
          <div class="form-group">
            <label for="dokter">Dokter Spesialis</label>
            <select class="form-control" name="dokter" id="dokter" required>
              <option value="">-- Pilih dokter --</option>
              <option value="klinis">Klinis</option>
              <option value="kebidanan">Kebidanan</option>
              <option value="diagnostik">Diagnostik</option>
              <option value="rehabilitas">Rehabilitas</option>
              <option value="jiwa & mental">Jiwa & Mental</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>

      <div class="card-footer">
      </div>
    </div>
  </section>
</div>
