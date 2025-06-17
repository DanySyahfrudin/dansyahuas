<style>
  /* Ubah font seluruh konten menjadi Times New Roman */
  body, .content-wrapper, .content-header, .card, form, label, input, select, textarea, button {
    font-family: "Times New Roman", Times, serif;
  }

  /* Warna latar belakang keseluruhan */
  .content-wrapper {
    background-color: #e0f7fa; /* biru laut muda (ganti dari pink muda) */
  }

  .content-header {
    background-color: #add8e6; /* biru muda */
    padding: 10px 0;
  }

  .breadcrumb {
    background-color: #b3e5fc; /* biru pastel terang */
  }

  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }

  .breadcrumb-item.active {
    color: #002244; /* biru lebih tua */
  }

  .card {
    background-color: #d0f0ff; /* biru sangat muda */
    border: 1px solid #90caf9; /* biru terang */
  }

  .card-header {
    background-color: #90caf9; /* biru muda */
    border-bottom: 1px solid #64b5f6; /* sedikit lebih gelap */
    color: inherit;
  }

  .card-tools .btn-tool {
    color: #003366; /* biru tua */
  }

  .form-control {
    border: 1px solid #90caf9;
    background-color: #e0f7fa;
    color: inherit;
  }

  .form-control:focus {
    border-color: #64b5f6;
    box-shadow: 0 0 5px #64b5f6;
    background-color: #f0fbff;
    color: inherit;
  }

  .btn-primary {
    background-color: #1565c0; /* biru tua */
    border-color: #0d47a1;
    color: white;
  }

  .btn-primary:hover {
    background-color: #0d47a1;
    border-color: #002171;
  }

  .btn-secondary {
    background-color: #64b5f6; /* biru muda */
    border-color: #42a5f5;
    color: #002244; /* biru tua gelap */
  }

  .btn-secondary:hover {
    background-color: #42a5f5;
    border-color: #1565c0;
    color: white;
  }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Pasien</h3>
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
                <form action="<?= base_url('pasien/update/' . $pasien['idpasien']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pasien['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?= $pasien['keluhan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" required><?= $pasien['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jam_kunjungan">Jam Kunjungan</label>
                        <select class="form-control" name="jam_kunjungan" id="jam_kunjungan" required>
                            <option value="">-- Pilih Jam Kunjungan --</option>
                            <?php
                            $start = strtotime('08:00');
                            $end = strtotime('16:00');
                            $interval = 60 * 60; // 1 jam

                            for ($time = $start; $time <= $end; $time += $interval):
                                $formatted_time = date('H:i', $time);
                                $selected = ($pasien['jam_kunjungan'] == $formatted_time) ? 'selected' : '';
                            ?>
                                <option value="<?= $formatted_time ?>" <?= $selected ?>><?= $formatted_time ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjungan" id="tgl_kunjungan" value="<?= $pasien['tgl_kunjungan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Opsional Footer -->
            </div>
        </div>
    </section>
</div>
