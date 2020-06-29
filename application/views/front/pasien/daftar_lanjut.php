<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Jadwal Pemeriksaan</h2>
            <p class="section-lead">Anda dapat melihat jadwal pemeriksaan di Puskesmas, silahkan buat perjanjian dengan dokter dengan memilih dokter dengan jam yang tersedia.</p>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                    <div class="card-header">
                                        <h4>Jadwal Pemeriksaan</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Dokter</th>
                                                <th scope="col">Hari</th>
                                                <th scope="col">Jam Mulai</th>
                                                <th scope="col">Jam Selesai</th>
                                                <th scope="col">Poli</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                            $no = 1;
                                            foreach($jadwal_dokter as $jd) :  ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $jd['nama_dokter'] ?></td>
                                                    <td><?= $jd['hari'] ?></td>
                                                    <td><?= $jd['jam_mulai']; ?></td>
                                                    <td><?= $jd['jam_selesai']; ?></td>
                                                    <td><?= $jd['nama_poli']; ?></td>
                                                    <td>
                                                       <?php  
                                                            if ($day < $jd['day_week']==3 AND $jd['day_week'] == 3){
                                                                 echo '<span class="badge badge-success">Tersedia</span>';
                                                                } elseif ($day == $hari['4'] AND $day < $jd['day_week']==6){
                                                                    echo '<span class="badge badge-success">Tersedia</span>';
                                                                }
                                                            else 
                                                                echo '<span class="badge badge-warning">Tidak Tersedia</span>';
                                                       ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-7 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                <form action="<?= base_url('dashboard/update_form') ?>" method="post">
                                    <div class="card-header">
                                        <h4>Data Pasien</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Dokter</label>
                                            <select id="dokter" name="kd_dokter" class="form-control">
                                                    <option value="" disabled="disabled" selected />Pilih</option>
                                                    <?php foreach($jadwal_dokter as $jd) : ?>
                                                    <option value="<?= $jd['kode_dokter'] ?>"><?= $jd['nama_dokter'] ?></option>

                                                    <?php endforeach; ?>
                                            </select>
                                            <button type="submit" class="btn btn-primary mt-3">Pilih Dokter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="<?= base_url('assets/img/doctor.svg') ?>" width="100%">
                    </div>
                </div>
            </div>
        </section>
    </div>