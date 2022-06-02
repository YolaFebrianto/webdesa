<section class="highlight-blue" style="background-image: url('gambar/Capture1.png'); background-size: cover;">
        <div class="container" >
            <div class="intro" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                <h2 class="text-center" style="color: black;">Quotes</h2>
                <p class="text-center" style="color:black;">Indonesia Tidak Akan bercahaya Karena Obor Besar Di Jakarta Tetapi Indonesia baru akan Bercahaya Karena Lilin-Lilin Desa</p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="#">Learn More</a></div>
        </div>
    </section>
    <div class="article-list">
        <div class="container">
            <div class="intro" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                <h2 class="text-center">Artikel Terkait</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                <div class="col-sm-6 col-md-4 item">
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;" src="<?php echo base_url() ?>templates/assets/img/desk.jpg"></div>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;" src="<?php echo base_url() ?>templates/assets/img/desk.jpg"></div>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;" src="<?php echo base_url() ?>templates/assets/img/desk.jpg"></div>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container"><div class="newsletter8 py-5">
  <div class="container" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
    <div class="row">
      <!-- column  -->
      <div class="col-lg-5">
        <h6 class="text-themecolor font-weight-normal text-uppercase">newsletter</h6>
        <h4 class="my-3">Dapatkan Notifikasi Berita Dari Kami</h4>
        <form class="mt-4">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Your Name" />
          </div>
          <div class="form-group">
            <input class="form-control" type="email" placeholder="Email Address" />
          </div>
          <div class="form-group">
            <button class="btn btn-danger-gradiant btn-block btn-md text-uppercase text-white border-0">Subscribe </button>
          </div>
          <div class="form-group">
            <div class="my-1">
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                <label class="custom-control-label" for="customControlAutosizing1">I have read and agree to the <a href="#" class="text-decoration-none"></a></label>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- column  -->
      <div class="col-lg-6 ml-auto">
        <div class="d-block d-md-flex border-bottom pb-3 text-uppercase">
          <h6 class="no-shrink font-weight-medium align-self-center m-b-0">Artikel Terkait</h6>
          </div>
           <?php foreach ($berita->result() as $key => $value) : ?>
        <div class="row blog-row mt-4 mb-3">
            
          <div class="col-md-4">
            <a href="#"><img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img12.jpg" alt="wrapkit" class="img-fluid" /></a>
          </div>
          <div class="col-md-8">
            <h5><a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><?php echo $value->judul_berita; ?></a></h5>
            <?php echo substr(strip_tags($value->isi_berita),0,50).'...'; ?>
          </div>
        </div>
    <?php endforeach; ?> 
       
</div>
        <div>
            <div class="container-fluid" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
                <h1 id="kontak">Kontak Informasi</h1>
                <hr>
                <form id="contactForm-1" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="successfail-1"></div>
                        </div>
                    </div>
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
                                    <div class="static-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2591546261347!2d112.60817181432266!3d-7.436550475330526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780a02b07a5175%3A0xaa5bfbe418f34bc8!2sBalai%20Desa%20Semambung!5e0!3m2!1sid!2sid!4v1652749158625!5m2!1sid!2sid" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Contact Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="contactForm-2" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="successfail-2"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6" id="message-2">
                                        <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                        <div class="form-group mb-3"><label class="form-label" for="from-name">Name</label><span class="required-input">*</span>
                                            <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" id="from-name-2" name="name" required="" placeholder="Full Name"></div>
                                        </div>
                                        <div class="form-group mb-3"><label class="form-label" for="from-email">Email</label><span class="required-input">*</span>
                                            <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="text" id="from-email-2" name="email" required="" placeholder="Email Address"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group mb-3"><label class="form-label" for="from-phone">Phone</label><span class="required-input">*</span>
                                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="text" id="from-phone-2" name="phone" required="" placeholder="Primary Phone"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group mb-3"><label class="form-label" for="from-calltime">Best Time to Call</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-select" id="from-calltime-2" name="call time">
                                                            <optgroup label="Best Time to Call">
                                                                <option value="Morning" selected="">Morning</option>
                                                                <option value="Afternoon">Afternoon</option>
                                                                <option value="Evening">Evening</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3"><label class="form-label" for="from-comments">Comments</label><textarea class="form-control" id="from-comments-2" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                            </div>
                                        </div>
                                        <hr class="d-flex d-md-none">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>