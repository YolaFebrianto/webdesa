<article class="blog-single">

    <!-- page header/blog hero
    ================================================== -->
    <div class="page-header page-header--single page-hero"
        style="background-image:url(<?php echo base_url(); ?>templates/hola-master/images/blog/blog-bg-01.jpg)">

        <div class="row page-header__content narrow">
            <article class="col-full">
                <div class="page-header__info">
                    <div class="page-header__cat">
                        <a href="#0"><?php echo $galeri['judul_galeri']; ?></a>
                    </div>
                </div>
                <h1 class="page-header__title">
                    <a href="#0" title="">
                        <?php echo $galeri['gambar_galeri']; ?>
                    </a>
                </h1>
                <ul class="page-header__meta">
                    <li class="date"><?php echo date('F d, Y', strtotime($galeri['tgl'])); ?></li>
                    <li class="author">
                        By
                        <!-- <span><?php echo $galeri['agenda_author']; ?></span> -->
                    </li>
                </ul>

            </article>
        </div>

    </div>
    <article>