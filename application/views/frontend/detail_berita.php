<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="newsticker-container">
                    <div id="newsticker-colour" class="slideup animated"></div>
                    <span class="newsticker-title delay-animated slidein text-center">
                        <?php echo date('F d, Y',strtotime($berita['tgl'])); ?>
                    </span>
                    <div class="newsticker">
                    </div>
                </div>
            </div>
        </div><br>
             <div class="row page-header__content narrow">
                <article class="col-full">            
            <div class="container">
                <img class="img-tengah" src="<?php echo base_url(); ?>gambar/0001.jpg"/>
                <style type="text/css">
                    .img-tengah{
                         display: block;
                         margin-left: auto;
                         margin-right: auto;
                         width: 340px;
                         height: 500px;
                    }
                </style>
            </div><br>
                        <h1 class="page-header__title">
                                <?php echo $berita['judul_berita']; ?>
                            </a>
                        </h1> 

                        <?php echo $berita['isi_berita']; ?> 
                    </article>
                </div>
