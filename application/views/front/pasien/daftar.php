<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hero</h2>
            <p class="section-lead">Components that can be used to make something bigger than the header.</p>

            <div class="row">
                <div class="col-md-5 mb-4">
                        <div class="hero-inner">
                            <div class="card">
                                <form action="<?php echo $action; ?>" method="post" id="form1" name="form1">
                                    <div class="card-header">
                                        <h4>Data Pendaftaran</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nomor Rawat</label>
                                            <input type="text" name="no_rawat" id="no_rawat" value="<?php echo date('Y-m-d-').noRegistrasiotomatis(); ?>" class="form-control" readonly>
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
            </div>
        </section>
    </div>