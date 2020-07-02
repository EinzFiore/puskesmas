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
                if($pasienDaftar['is_active'] == 1 AND $pendaftaran['tanggal_daftar'] == $tgl )  : ?>
                    <div class="col-md-10 mb-4">
                    <?php if($tindak['no_rawat'] == $pendaftaran['no_rawat']) : ?>
                        <div class="alert alert-success" role="alert">
                            <strong>PEMBERITAHUAN</strong> : Tindakan berobat telah di publish, anda dapat melihat rincian tindakan di menu tindakan berobat.
                        </div>
                    <?php endif; ?>
                        <div class="hero-inner">
                            <div class="card">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Rawat</th>
                                            <th scope="col">No. Rekam Medis</th>
                                            <th scope="col">Nama Pasien</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Dokter Penanggung Jawab</th>
                                            <th scope="col">Poli</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $pendaftaran['no_rawat']; ?></td>
                                            <td><?= $pendaftaran['no_rekamedis']; ?></td>
                                            <td><?= $pendaftaran['nama_pasien']; ?></td>
                                            <td><?= $pendaftaran['status_pasien']; ?></td>
                                            <td><?= $pendaftaran['nama_dokter']; ?></td>
                                            <td><?= $pendaftaran['nama_poli']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Nomor Antri</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="ml-4"><?= $pendaftaran['no_registrasi']; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= site_url('pendaftaran/cetakantrian/'.$pendaftaran['no_rawat']) ?>" class="btn btn-primary btn-lg ml-3">Cetak</a>
                                </div>
                            </div>
                        </div>
                
                <!-- Kalau User Belum Pernah Daftar tampilkan form daftar -->
                <?php elseif($pasien['is_active'] == 0  AND $pasien['user_id'] == $this->session->userdata('id_users')) : ?>
                <div class="col-md-5 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                <form action="<?php echo $action; ?>" method="post" id="form1" name="form1">
                                    <div class="card-header">
                                        <h4>Data Pendaftaran</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" name="no_rawat" id="no_rawat" value="<?php echo date('Y-m-d-').noRegistrasiotomatis(); ?>" class="form-control" readonly>
                                            <?php echo form_error('no_rawat') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="tanggal_daftar" id="tanggal_daftar" placeholder="Tanggal Daftar" value="<?php echo date('Y-m-d'); ?>" />
                                            <input type="hidden" class="form-control" name="no_registrasi" id="no_registrasi" placeholder="No Registrasi" value="<?php echo noRegistrasiotomatis(); ?>" readonly />
                                        </div>
                                        <div class="form-group mb-0">
                                            <label>Poli Tujuan</label>
                                            <?php echo cmb_dinamis('id_poli', 'tbl_poli', 'nama_poli', 'id_poli', $id_poli) ?>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="col-md-7 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="card-header">
                                        <h4>Data Pasien</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>No. Rekam Medis</label>
                                            <input type="text" class="form-control" name="no_rekamedis" id="no_rekamedis" placeholder="Masukkan No Rekamedis" value="<?= $pasien['no_rekamedis']; ?>" readonly />
                                            <?php echo form_error('no_rekamedis') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input type="text" class="form-control" value="<?= $pasien['nama_pasien']; ?>" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien"  readonly/>
                                            <?php echo form_error('nama_pasien') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control" value="<?= $pasien['tanggal_lahir']; ?>" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" readonly/>
                                            <?php echo form_error('tanggal_lahir') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penanggung Jawab</label>
                                            <input type="text" class="form-control" name="nama_penanggung_jawab" id="nama_penanggung_jawab" placeholder="Nama Penanggung Jawab" value="<?php echo $nama_penanggung_jawab; ?>" />
                                            <?php echo form_error('nama_penanggung_jawab') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Hubungan Dengan Penanggung Jawab</label>
                                            <?php echo form_dropdown('hubungan_dengan_penanggung_jawab', array('Saudara Kandung' => 'Saudara Kandung', 'Orang Tua' => 'Orang Tua'), $hubungan_dengan_penanggung_jawab, array('class' => 'form-control')); ?>
                                            <?php echo form_error('hubungan_dengan_penanggung_jawab') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Penanggung Jawab</label>
                                            <textarea class="form-control" rows="3" name="alamat_penanggung_jawab" id="alamat_penanggung_jawab" placeholder="Alamat Penanggung Jawab" value="<?php echo $alamat_penanggung_jawab ?>"></textarea>
                                            <?php echo form_error('alamat_penanggung_jawab') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Pasien</label>
                                            <select id="status_pasien" name="status_pasien" onchange="tampilkan()" class="form-control">
                                                    <option value="" disabled="disabled" selected/>Pilih</option>
                                                    <option value="BPJS">BPJS</option>
                                                    <option value="Umum">Umum</option>
                                            </select>
                                            <?php echo form_error('status_pasien') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>No. BPJS</label>
                                            <input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No BPJS"/>
                                            <?php echo form_error('no_bpjs') ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else : ?>
                            <div class="col-md-12 mb-4">
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading">Halo, <?= $user['full_name']; ?></h4>
                                            <p>Saat ini kamu belum bisa mendaftar, dikarenakan kamu belum mengisi form data pasien,atau kamu belum mengkonfirmasi tindakan berobat sebelumnya, untuk melakukan pendaftaran pasien kamu bisa menuju halaman <a class="btn btn-info" href="<?= base_url('dashboard/data_pasien'); ?>">Data Pasien</a> atau untuk mengkonfirmasi tindakan berobat bisa dilakukan pada halaman <a class="btn btn-info" href="<?= base_url('dashboard/riwayat_berobat') ?>">Riwayat Berobat</a> Terimakasih </p>
                                            <hr>
                                            <p class="mb-0">Puskesmas 2020.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php endif; ?>
                <!-- END Form Daftar -->


            </div>
        </section>
    </div>