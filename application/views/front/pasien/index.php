<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hero</h2>
            <p class="section-lead">Components that can be used to make something bigger than the header.</p>

            <div class="row">
                <div class="col-12 mb-4">
                    <?php if($user['id_user_level'] == 8) : ?>
                    <div class="alert alert-warning" role="alert">
                        <h5>Silahkan untuk melengkapi data terlebih dahulu, agar dapat mendaftar sebagai Pasien. klik button dibawah
                        untuk mendaftar </h5><br> <button class="btn btn-success mb-4" data-toggle="modal" data-target="#formDaftar">Isi Form</button>
                    </div>
                    <?php endif; ?>


                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Welcome Back, <?= $user['full_name'] ?>!</h2>
                            <p class="lead">This page is a place to manage posts, categories and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php if($user['id_user_level'] == 8) : ?>
<!-- Modal -->
                <div class="modal fade" id="formDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Isi Form Daftar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo $action; ?>" method="post" id="form1" name="form1">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor KTP</label>
                                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No KTP / ID" value="<?php echo $no_ktp; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor BPJS</label>
                                <input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No BPJS" value="<?php echo $no_bpjs; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor Rekamedis</label>
                                <input type="text" class="form-control" name="no_rekamedis" id="no_rekamedis" placeholder="No Rekamedis" value="<?php echo $no_rekamedis; ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Pasien</label>
                                <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" value="<?php echo $nama_pasien; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Status Pasien</label>
                                <select id="status_pasien" name="status_pasien" onchange="tampilkan()" class="form-control">
                                        <option value="" disabled="disabled" selected/>Pilih</option>
                                        <option value="BPJS">BPJS</option>
                                        <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                <?php echo form_dropdown('jenis_kelamin', array('L' => 'Laki-Laki', 'P' => 'Perempuan'), $jenis_kelamin, array('class' => 'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" selected="<?php echo $tanggal_lahir ?>" />
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
<?php endif; ?>