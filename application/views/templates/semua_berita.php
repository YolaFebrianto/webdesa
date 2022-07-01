<div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <?php foreach ($berita->result() as $key => $value) : ?>
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <a href="#"><img src="<?php echo base_url().'gambar/'.$value->gambar;?>" height="150px;" /></a>
                          </div>   
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          <a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>"><?php echo $value->judul_berita; ?></a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2"><?php echo ($value->author) ?></span><?php echo ($value->jam) ?><span>|<?php echo ($value->tgl) ?>
                        </div>
                        <p class="mb-0">
                          <?php echo substr(strip_tags($value->isi_berita),0,150).'...'; ?>
                        </p>
                        <strong><a href="<?php echo base_url('welcome/detail_berita/'.$value->id_berita); ?>" style="color: red;">Baca Selengkapnya</a></strong>
                      </div>
                       <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>