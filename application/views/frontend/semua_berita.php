<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="newsticker-container">
                    <div id="newsticker-colour" class="slideup animated"></div>
                    <span class="newsticker-title delay-animated slidein text-center">
						Berita
                    </span>
                    <div class="newsticker">
                      <ul class="newsticker-list">
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <div class="container" style="font-family: Palatino Linotype", Book Antiqua, Palatino, serif;">
        <article class="col-full">
            <div class="col-lg-12 ml-auto">
                 <div class="row blog-row mt-4 mb-3">
                  
                  
                    <div class="blog-list block-1-2 block-tab-full">
                <?php foreach ($berita->result() as $key => $value) : ?>
                <article class="col-block">
                    <div class="col-md-4">
                    <a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><img src="../gambar/LOGO12.jpeg" alt="wrapkit" class="img-fluid" /></a>
                  </div>
                   <!--  <div class="blog-date">
                        <a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><?php echo date('d-m-Y H:i:s',strtotime($value->tgl)); ?></a>
                    </div> -->  
                    
                    <h2 class="h01"><a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><?php echo $value->judul_berita; ?></a></h2>
                    <p>
                    <?php echo substr(strip_tags($value->isi_berita),0,250).'...'; ?>
                    <strong><a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>" style="color: red;">Baca Selengkapnya</a></strong>
                    </p>

                    <!-- <div class="blog-cat">
                        <a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><?php echo @$value->tulisan_kategori_nama; ?></a>
                    </div> -->
                    <h6 class="h01"></h6>


                </article>
                <?php endforeach; ?>
            </div>
                 
                </div>
            </div>    
        </article><br>
            <!-- <div><a class="btn btn-outline-primary" role="button" href="#">← Back</a><a class="btn btn-outline-primary float-end" role="button" href="#">Next →</a></div> -->
        </div>
    </div>
  