<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hero</h2>
            <p class="section-lead">Components that can be used to make something bigger than the header.</p>

            <div class="row">
                    <div class="col-md-12">
                        <div class="hero-inner">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahPasien">Tambah Pasien</button>
                            <div class="card">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Rekamedis</th>
                                            <th scope="col">Nama Pasien</th>
                                            <th scope="col">Status Pasien</th>
                                            <th scope="col">Tanggal Daftar</th>
                                            <th scope="col">Poli</th>
                                            <th scope="col">Nama Penanggung Jawab</th>
                                            <th scope="col">Hubungan Penanggung Jawab</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <?php foreach($pasienUser as $pu) :  ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $pu['no_rekamedis']; ?></td>
                                            <td><?= $pu['nama_pasien']; ?></td>
                                            <td><?= $pu['status_pasien']; ?></td>
                                            <td><?= $pu['tanggal_daftar']; ?></td>
                                            <td><?= $pu['nama_poli']; ?></td>
                                            <td><?= $pu['nama_penanggung_jawab']; ?></td>
                                            <td><?= $pu['hubungan_dengan_penanggung_jawab']; ?></td>
                                            <td>
                                            <?php 
                                                if($pu['is_active'] == 1){
                                                    echo '<span class="badge badge-primary">Telah Diperiksa</span>';
                                                } else echo '<span class="badge badge-warning">Belum Diperiksa</span>';
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
        </section>
    </div>
    <?php foreach($pasienUser as $pu) :  ?>
    <!-- Modal -->
    <div class="modal fade" id="tambahPasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No KTP / ID" value="<?php echo $pu['no_ktp']; ?>" readonly />
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
            <?php endforeach; ?>
            