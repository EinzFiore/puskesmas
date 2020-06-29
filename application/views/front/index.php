   <!--::header part start::-->
   <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?= base_url('vendor/medico/') ?>img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">Jadwal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">COVID-19</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">Tanya Dokter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="<?= base_url('auth') ?>">Login</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- Modal  Login-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open('auth/cheklogin'); ?>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" placeholder="youremail@email.com" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" placeholder="******" name="password" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- END Modal Login -->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Mari cek kesehatan anak buah hati anda</h1>
                            <p>Kami dapat membantu mengenai kesehatan anak anda, dari berbagai macam gejala penyakit. <strong>(COVID-19)</strong> kabur dicek kami</p>
                            <a href="#" class="btn_2">Make an appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="<?= base_url('vendor/medico/') ?>img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="<?= base_url('vendor/medico/') ?>img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Tentang kami</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
                            maecenas accumsan lacus vel</p>
                        <a class="btn_2 " href="#">learn more</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="<?= base_url('vendor/medico/') ?>img/icon/banner_1.svg" alt="">
                                <h5>Emergency</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?= base_url('vendor/medico/') ?>img/icon/banner_2.svg" alt="">
                                <h5>Appointment</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?= base_url('vendor/medico/') ?>img/icon/banner_3.svg" alt="">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_1.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="<?= base_url('vendor/medico/') ?>img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_1.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg" alt=""></span>
                            <h4>Better Future</h4>
                            <p>Darkness multiply rule Which from without life creature blessed
                                give moveth moveth seas make day which divided our have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Depertment</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?= base_url('vendor/medico/') ?>img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($dokter as $dokter) : ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="<?= base_url('assets/') ?>dr.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3><?= $dokter['nama_dokter'] ?></h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Select service</option>
                                        <option value="2">Name of service</option>
                                        <option value="3">Name of service</option>
                                        <option value="4">Name of service</option>
                                        <option value="5">Name of service</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="btn_2">Make an Appointment</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="<?= base_url('vendor/medico/') ?>img/reservation.png" alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?= base_url('vendor/medico/') ?>img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Jhon mike</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?= base_url('vendor/medico/') ?>img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Jhon mike</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->