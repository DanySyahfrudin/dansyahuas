<style>
  .content-wrapper, .content-wrapper * {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* biarkan teks pakai warna default */
  }

  .content-wrapper {
    background-color: #e0f7ff; /* biru laut */
  }

  .content-header,
  .card-header {
    background-color: #99ccff; /* biru muda */
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
    background-color: #e0f7ff; /* biru laut */
    border: 1px solid #99ccff; /* biru muda */
  }

  .card-tools .btn-tool {
    color: #001f33; /* biru tua */
  }

  .form-control {
    border: 1px solid #66b2ff; /* biru sedang */
    background-color: #e0f7ff; /* biru laut */
  }

  .form-control:focus {
    border-color: #3399ff; /* biru terang */
    box-shadow: 0 0 5px #3399ff;
    background-color: #f0fbff; /* putih kebiruan */
  }

  .btn-primary {
    background-color: #3399ff; /* biru utama */
    border-color: #0073e6;
    color: white;
  }

  .btn-primary:hover {
    background-color: #0073e6;
    border-color: #0059b3;
  }

  .table th,
  .table td {
    background-color: #f0fbff;
    border-color: #99ccff;
  }

  .thead-dark th {
    background-color: #66b2ff;
    color: white;
  }

  .text-center {
    background-color: #e0f7ff;
  }
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
                <h3 class="card-title">Daftar Pasien</h3>
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
                <h5>Laporan pasien dari <strong><?= $tanggal_dari ?></strong> sampai <strong><?= $tanggal_sampai ?></strong></h5>

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>Keluhan</th>
                                <th>Jam Kunjungan</th>
                                <th>Tanggal Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($pasien as $b): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $b->nama ?></td>
                                    <td><?= $b->tgl_lahir ?></td>
                                    <td><?= $b->kategori ?></td> <!-- Status -->
                                    <td><?= $b->alamat ?></td>   <!-- Alamat -->
                                    <td><?= $b->keluhan ?></td>
                                    <td><?= $b->jam_kunjungan ?></td>
                                    <td><?= $b->tgl_kunjungan ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (empty($pasien)): ?>
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada data pasien pada rentang tanggal tersebut.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                <!-- Optional footer -->
            </div>
        </div>
    </section>
</div>
