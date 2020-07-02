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
                            <div class="card">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Pasien</th>
                                            <th scope="col">Nama Poli</th>
                                            <th scope="col">Nama Penyakit</th>
                                            <th scope="col">Tindakan</th>
                                            <th scope="col">Hasil Periksa</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <?php foreach($riwayatAll as $ra) :  ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $ra['nama_pasien']; ?></td>
                                            <td><?= $ra['nama_poli']; ?></td>
                                            <td><?= $ra['nama_penyakit']; ?></td>
                                            <td><?= $ra['nama_tindakan']; ?></td>
                                            <td><?= $ra['hasil_periksa']; ?></td>
                                            <td><?= $ra['tanggal']; ?></td>
                                            <td>
                                                <?php 
                                                    if($ra['jenis_kelamin'] == 'L') echo 'Laki-laki';
                                                    else echo 'Perempuan';
                                                ?> 
                                            </td>
                                            <td>
                                            <?php 
                                                if($ra['is_active'] == 1){
                                                    echo '<span class="badge badge-primary">Telah Diperiksa</span>';
                                                } else echo '<span class="badge badge-warning">Belum Diperiksa</span>';
                                            ?>
                                            </td>
                                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#ubahKonfirmasi<?= $ra['no_rekamedis'] ?>">Konfirmasi</button></td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-7">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Hai <?= $this->session->userdata('full_name'); ?></h4>
                        <p>Jika kamu ingin mendaftar sebagai pasien lama, kamu dapat mengkonfirmasi status pasien agar data yang telah terdaftar dapat digunakan kembali</p>
                        <hr>
                        <p class="mb-0">Silahkan klik "konfirmasi" lalu klik "Ubah" untuk konfirmasi.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img src="<?= base_url('assets/img/doctor2.svg') ?>" width="90%" alt="">
                </div>
            </div>
        </section>
    </div>

<?php foreach($riwayatAll as $ra) :  ?>
<!-- Modal -->
    <div class="modal fade" id="ubahKonfirmasi<?= $ra['no_rekamedis'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Konfirmasi ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('dashboard/ubah_konfirmasi/') . $ra['no_rekamedis'] ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-3">
                            <input type="hidden" name="noreka" value="<?= $ra['no_rekamedis']; ?>">
                            </div>
                            <div class="col-sm-7">
                                <img src="<?= base_url('assets/img/confused.png') ?>" width="90%" alt="" srcset="">
                            </div> 
                            <div class="col-sm-12">
                                <h4 class="text-center">Ingin ubah konfirmasi tindakan?</h4>
                            </div>                                      
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
