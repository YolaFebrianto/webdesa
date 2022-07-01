 <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    
                       <h1 class="page-header__title">
                    <a href="#0" title="">
                        <?php echo $berita['judul_berita']; ?>
                    </a>
                </h1>
                      <div class="page-header__cat">   
                         <ul class="page-header__meta">
                            <li class="date"><?php echo date('F d, Y',strtotime($berita['tgl'])); ?></li>
                            <li class="author">
                                By <a href="#0"><?php echo $berita['author']; ?></a>
                            </li>
                        </ul>
                    </div> 
                    <p class="font-weight-600 fs-15 mb-5 mt-4"> 
                      <img src="<?php echo base_url().'gambar/'.$berita['gambar']; ?>" />
                    </p>
                    <p class="font-weight-600 fs-15 text-center">
                      <?php echo $berita['isi_berita']; ?>
                    </p><br><br>
                    <center>
                    <h3>
                        <a href="<?php echo base_url('welcome/semua_berita'); ?>" style="text-align: center;">
                        View All Post
                    </h3>
                    </center>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>