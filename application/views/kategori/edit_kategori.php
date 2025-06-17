<style>
  /* Font Times New Roman untuk seluruh konten di content-wrapper */
  body, .content-wrapper, .content-header, .breadcrumb, .card, form, label, input, button, a {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* teks tetap warna default */
  }

  /* Background dan elemen biru */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }
  .content-header {
    background-color: #add8e6; /* biru muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #d9f2ff; /* biru sangat terang */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002147; /* lebih gelap */
  }
  .card {
    background-color: #f0fbff; /* biru laut lembut */
    border: 1px solid #66b2ff; /* biru muda */
  }
  .card-header {
    background-color: #66b2ff; /* biru muda */
    border-bottom: 1px solid #0073e6; /* biru lebih kuat */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #000033; /* biru tua */
  }
  .form-control {
    border: 1px solid #66b2ff;
    background-color: #e0f7ff;
    color: inherit;
  }
  .form-control:focus {
    border-color: #0073e6;
    box-shadow: 0 0 5px #0073e6;
    background-color: #f5fcff;
    color: inherit;
  }
  .btn-primary {
    background-color: #0073e6;
    border-color: #005599;
    color: white;
  }
  .btn-primary:hover {
    background-color: #005599;
    border-color: #003366;
  }
  .btn-secondary {
    background-color: #99ccff;
    border-color: #66b2ff;
    color: #003366;
  }
  .btn-secondary:hover {
    background-color: #66b2ff;
    border-color: #005599;
    color: white;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Update Status</h3>
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
        <form action="<?= base_url('kategori/update/' . $kategori_pasien['idkategori']); ?>" method="POST">
          <div class="form-group">
            <label for="kategori">Status</label>
            <input type="text" class="form-control" name="kategori" id="kategori"
              value="<?= $kategori_pasien['kategori']; ?>" placeholder="Status" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>

      <div class="card-footer">
        <!-- Optional Footer -->
      </div>
    </div>
  </section>
</div>
