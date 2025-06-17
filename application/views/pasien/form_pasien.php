<style>
  /* Ubah font seluruh konten menjadi Times New Roman */
  body, .content-wrapper, .content-header, .card, form, label, input, select, textarea, button {
    font-family: "Times New Roman", Times, serif;
  }

  /* Skema warna biru */
  .content-wrapper {
    background-color: #e0f7ff; /* biru laut (pengganti pink muda) */
  }
  .content-header {
    background-color: #99ccff; /* biru muda */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #cce6ff; /* biru sangat muda */
  }
  .breadcrumb-item a {
    color: #003366; /* biru tua */
  }
  .breadcrumb-item.active {
    color: #002147; /* biru tua lebih gelap */
  }
  .card {
    background-color: #cce6ff; /* biru muda */
    border: 1px solid #00008b; /* biru tua */
  }
  .card-header {
    background-color: #99ccff; /* biru muda */
    border-bottom: 1px solid #003366; /* biru tua */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #002147; /* biru tua */
  }
  .form-control {
    border: 1px solid #66a3ff; /* biru terang */
    background-color: #e0f7ff; /* biru laut */
    color: inherit;
  }
  .form-control:focus {
    border-color: #3399ff; /* biru terang */
    box-shadow: 0 0 5px #3399ff;
    background-color: #f0fbff; /* biru putih */
    color: inherit;
  }
  .btn-primary {
    background-color: #3399ff; /* biru primer */
    border-color: #003366; /* biru tua */
    color: white;
  }
  .btn-primary:hover {
    background-color: #0073e6; /* biru sedang */
    border-color: #002147; /* biru tua pekat */
  }
  .btn-secondary {
    background-color: #99ccff; /* biru muda */
    border-color: #66a3ff; /* biru terang */
    color: #002147; /* biru tua */
  }
  .btn-secondary:hover {
    background-color: #66a3ff;
    border-color: #003366;
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
                <h3 class="card-title">Form Pasien</h3>
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
                <form action="<?= base_url('pasien/insert'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter Spesialis</label>
                        <select class="form-control" name="dokter" id="dokter" required>
                            <option value="">-- Pilih Dokter --</option>
                            <?php if (!empty($dokter_pasien)): ?>
                                <?php foreach ($dokter_pasien as $k): ?>
                                    <option value="<?= $k->dokter; ?>"><?= $k->dokter; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="yyyy-mm-dd" required>
                    </div>

                    <div class="form-group">
                        <label for="no_tlpn">No Telepon</label>
                        <input type="text" class="form-control" name="no_tlpn" id="no_tlpn" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" placeholder="Tuliskan keluhan..." required></textarea>
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
                            ?>
                                <option value="<?= $formatted_time ?>"><?= $formatted_time ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjungan" id="tgl_kunjungan" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Optional Footer -->
            </div>
        </div>
    </section>
</div>
