<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $judul; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hero</h2>
            <p class="section-lead">Components that can be used to make something bigger than the header.</p>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="z-index: 1;">
                        <div class="card-body">
                            <figure class="figure">
                                <img src="<?= base_url('assets/foto_profil/') . $user['images'] ?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption"><?= $user['email'] ?>.</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card">
                        <div class="card-body">
                            <?= form_open_multipart('dashboard/update_action');?>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama User</label>
                                <?php if($this->uri->segment(2) == "ubah_profile") : ?>
                                    <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" value="<?= $user['full_name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Ubah Photo</label>
                                    <input type="file" name="images" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <?php else : ?>
                                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $user['full_name'] ?>" disabled>
                                <?php endif; ?>
                            <?php if($this->uri->segment(2) == "ubah_profile") : ?>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="<?= base_url('dashboard/profile'); ?>" class="btn btn-warning">Kembali</a>
                                <?php else : ?>
                                    <a href="<?= base_url('dashboard/ubah_profile'); ?>" class="btn btn-primary mt-4">Ubah Data</a>
                            <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
                <?php if($this->uri->segment(2) == "ubah_profile") : ?>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-7" style="bottom: 150px">
                <?php echo $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('dashboard/ubah_password'); ?>" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <input type="password" name="password_lama" class="form-control" id="inputPassword" placeholder="Password Lama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <input type="password" name="password_baru" class="form-control" id="inputPassword" placeholder="Password Baru">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ubah Password</button>
                            </form>
                        </div>
                    </div>     
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>