<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Si-ADP</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>news/./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>news/assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>news/assets/images/favicon.jpg" />

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>news/assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="<?php echo base_url('welcome');?>"
                      ><img src="<?php echo base_url(); ?>news/assets/images/desa.png" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url('welcome');?>">BERANDA </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('welcome/semua_berita');?>">BERITA</a>
                        </li>
                        <?php
                            if(!empty(@$this->session->userdata('email'))){                        
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('Aspirasi/aspirasi');?>">ASPIRASI</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('Pengaduan/pengaduan');?>">PENGADUAN</a>
                        </li>
                        <?php
                            }
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('welcome/galeri');?>">GALERI PHOTO</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('welcome/kontak');?>">KONTAK</a>
                        </li>
                        <?php
                            if(!empty(@$this->session->userdata('email'))){                        
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('welcome/logout');?>">Logout</a>
                        </li>
                        <?php
                            } else {
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('welcome/login');?>">Login</a>
                        </li>
                        <?php
                            }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>

  