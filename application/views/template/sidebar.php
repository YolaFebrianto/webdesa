<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIDESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">DESAKU</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin');?>" class="nav-link">
             <i class="fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
         <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-globe-asia"></i>
              <p>
                Profil Desa
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_potensi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Potensi Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_peta') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peta Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_bpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_pemerintah') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemerintah Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_visi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Dan Misi</p>
                </a>
              </li>
            </ul>
          </li> -->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-pager"></i>
              <p>
                Halaman
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_berita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_agenda') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_pengumuman') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/v_galeri') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?php echo base_url('admin/v_keuangan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keuangan Desa</p>
                </a>
              </li> -->
            </ul>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url('admin/v_profil') ?>" class="nav-link">
              <i class="far fa-address-book"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/v_kontak') ?>" class="nav-link">
              <i class="far fa-address-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>