<style>
  /* Font Times New Roman untuk seluruh area */
  body, .content-wrapper, .content-header, .breadcrumb, .card, form, label, select, button, .alert {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* biarkan warna teks default */
  }

  /* Background biru bervariasi */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }
  .content-header {
    background-color: #add8e6; /* biru muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #cce6ff; /* biru terang */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002147; /* biru lebih gelap */
  }
  .card {
    background-color: #f0fbff; /* biru laut lembut */
    border: 1px solid #66a3ff; /* biru muda */
  }
  .card-header {
    background-color: #99ccff; /* biru muda */
    border-bottom: 1px solid #005599; /* biru tua */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #002147; /* biru tua */
  }

  /* Form Control */
  .form-control {
    border: 1px solid #66a3ff;
    background-color: #e0f7ff;
    color: inherit;
  }
  .form-control:focus {
    border-color: #3399ff;
    box-shadow: 0 0 5px #3399ff;
    background-color: #f0fbff;
    color: inherit;
  }

  /* Alert */
  .alert-success {
    background-color: #cceeff; /* biru lembut */
    color: #003366;
  }
  .alert-danger {
    background-color: #99ccff; /* biru agak muda */
    color: #002147;
  }

  /* Tombol Primary biru */
  .btn-primary {
    background-color: #3399ff;
    border-color: #005599;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
  }
  .btn-primary:hover {
    background-color: #0073e6;
    border-color: #003366;
  }
</style>
<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Status</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Tambah Status</h3>
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
        <form action="<?= base_url('kategori/insert'); ?>" method="POST">
          <div class="form-group">
            <label for="kategori">Status</label>
            <select class="form-control" name="kategori" id="kategori" required>
              <option value="">-- Pilih Status --</option>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
              <option value="Dalam Proses">Dalam Proses</option>
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
