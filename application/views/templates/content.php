  <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Flash news</span>
                <p class="mb-0">
                  Selamat Datang Di Situs Desa Semambung
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger"><?php
                        $tanggal= mktime(date("m"),date("d"),date("Y"));
                        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                        date_default_timezone_set('Asia/Jakarta');
                        $jam=date("H:i:s");
                        echo "| Pukul : <b>". $jam." "."</b>";
                        $a = date ("H");
                        if (($a>=6) && ($a<=11)){
                        echo "<b>, Selamat Pagi !!</b>";
                        }
                        else if(($a>11) && ($a<=15))
                        {
                        echo ", Selamat Siang !!";}
                        else if (($a>15) && ($a<=18)){
                        echo ", Selamat Siang !!";}
                        else { echo ", <b> Selamat Malam </b>";}
                        ?> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                  <img
                    src="<?php echo base_url(); ?>news/assets/images/dashboard/banner.jpg"
                    alt="banner"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      global news
                    </div>
                    <h1 class="mb-0">GLOBAL PANDEMIC</h1>
                    <h1 class="mb-2">
                      Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                      Postponed, 168 Trains
                    </h1>
                    <div class="fs-12">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Announcement</h2>
                    
                    <?php foreach ($pengumuman->result() as $key => $value) : ?>
                    <div
                      class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                    >  
                      <div class="pr-3">
                        <h5><?php echo $value->judul_pengumuman; ?></h5>
                        <div class="fs-12">
                          <span class="mr-2">10 Minutes ago </span>
                          <p><?php echo substr(strip_tags($value->isi_pengumuman),0,30).'...'; ?></p>
                        </div>
                       
                      </div>
                      <div class="rotate-img">
                        <a href="#"><img src="<?php echo base_url().'gambar/'.$value->gambar;?>" height="100px;"  /></a>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Category</h2>
                    <ul class="vertical-menu">
                      <li><a href="#">Politics</a></li>
                      <li><a href="#">International</a></li>
                      <li><a href="#">Finance</a></li>
                      <li><a href="#">Health care</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Jobs</a></li>
                      <li><a href="#">Media</a></li>
                      <li><a href="#">Administration</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Game</a></li>
                      <li><a href="#">Art</a></li>
                      <li><a href="#">Kids</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url(); ?>news/assets/images/dashboard/home_4.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          South Korea’s Moon Jae-in sworn in vowing to address
                          North
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Lorem Ipsum has been the industry's standard dummy
                          text ever since the 1500s, when an
                        </p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url(); ?>news/assets/images/dashboard/home_5.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          No charges over 2017 Conservative battle bus cases
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Lorem Ipsum has been the industry's standard dummy
                          text ever since the 1500s, when an
                        </p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url(); ?>news/assets/images/dashboard/home_6.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Flash news</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600">
                          Kaine: Trump Jr. may have committed treason
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Lorem Ipsum has been the industry's standard dummy
                          text ever since the 1500s, when an
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Video
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="<?php echo base_url(); ?>news/assets/images/dashboard/home_7.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >Lifestyle</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="<?php echo base_url(); ?>news/assets/images/dashboard/home_8.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >National News</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="<?php echo base_url(); ?>news/assets/images/dashboard/home_9.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >Lifestyle</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <img
                                  src="<?php echo base_url(); ?>news/assets/images/dashboard/home_10.jpg"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="badge-positioned w-90">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <span
                                    class="badge badge-danger font-weight-bold"
                                    >National News</span
                                  >
                                  <div class="video-icon">
                                    <i class="mdi mdi-play"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Latest Video
                          </div>
                          <p class="mb-3">See all</p>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url(); ?>news/assets/images/dashboard/home_11.jpg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600 mb-0">
                            Apple Introduces Apple Watch
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url(); ?>news/assets/images/dashboard/home_12.jpg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600 mb-0">
                            SEO Strategy & Google Search
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url(); ?>news/assets/images/dashboard/home_13.jpg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600 mb-0">
                            Cycling benefit & disadvantag
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url(); ?>news/assets/images/dashboard/home_14.jpg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600">
                            The Major Health Benefits of
                          </h3>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center pt-3"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url(); ?>news/assets/images/dashboard/home_15.jpg"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h3 class="font-weight-600 mb-0">
                            Powerful Moments of Peace
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <div class="row">
                        <div class="col-12 col-md-6" id="message-1">
                            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                            <div class="form-group mb-3"><label class="form-label" for="from-name">Nama</label><span class="required-input">*</span>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-1" name="name" required="" placeholder="Nama Lengkap"></div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-email">Email</label><span class="required-input">*</span>
                                <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="text" id="from-email-1" name="email" required="" placeholder="Alamat Email"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group mb-3"><label class="form-label" for="from-phone">Phone</label><span class="required-input">*</span>
                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="text" id="from-phone-1" name="phone" required="" placeholder="No Telephon"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3"><label class="form-label" for="from-comments">Comments</label><textarea class="form-control" id="from-comments-1" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                    <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                </div>
                            </div>
                            <hr class="d-flex d-md-none">
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                            <div class="row">
                                <div class="col-12">
                                    <div class="static-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2591546261347!2d112.60817181432266!3d-7.436550475330526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780a02b07a5175%3A0xaa5bfbe418f34bc8!2sBalai%20Desa%20Semambung!5e0!3m2!1sid!2sid!4v1652749158625!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                </div>
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                    <div><span><strong>Name</strong></span></div>
                                    <div><span>sidesa@website.com</span></div>
                                    <div><span>www.awebsite.com</span></div>
                                    <hr class="d-sm-none d-md-block d-lg-none">
                                </div>
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                    <div><span><strong>Office Name</strong></span></div>
                                    <div><span>55 Icannot Dr</span></div>
                                    <div><span>Daytone Beach, FL 85150</span></div>
                                    <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                    <hr class="d-sm-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
             
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        