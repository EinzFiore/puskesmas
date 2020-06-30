<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hero</h2>
            <p class="section-lead">Components that can be used to make something bigger than the header.</p>

            <div class="row">
                <?php 
                $tgl = date('Y-m-d');
                if($pasien['is_active'] == 1 AND $pendaftaran['tanggal_daftar'] == $tgl AND $tindak['no_rawat'] == $pendaftaran['no_rawat'] )  : ?>
                    <div class="col-md-9 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Poli</th>
                                            <th scope="col">Penyakit</th>
                                            <th scope="col">Tindakan</th>
                                            <th scope="col">Hasil Periksa</th>
                                            <th scope="col">Nama Obat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $tindak['nama_poli']; ?></td>
                                            <td><?= $tindak['nama_penyakit']; ?></td>
                                            <td><?= $tindak['nama_tindakan']; ?></td>
                                            <td><?= $tindak['hasil_periksa']; ?></td>
                                            <td><?= $tindak['nama_obat']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Hasil</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="ml-4"><?= $tindak['hasil_periksa']; ?></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= site_url('tindakanberobat/cetakrekamedis/'.$pendaftaran['no_rawat']) ?>" class="btn btn-primary btn-lg ml-3">Cetak Rekam Medis</a>
                                </div>
                            </div>
                        </div>
                <?php endif; ?>
            </div>
        </section>
    </div>