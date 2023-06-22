<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/img/logo/LOGO.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIT Ibnu Hajar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Dashboard
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/pesan" class="nav-link {{ Request::is('admin/saran*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                        Pesan
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('admin/posts*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Berita
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/posts/berita" class="nav-link {{ Request::is('admin/posts/berita*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts/kategori" class="nav-link {{ Request::is('admin/posts/kategori*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori</p>
                        </a>
                    </li>
                    </ul>
                </li>

                {{-- <li class="nav-item {{ Request::is('admin/posts*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Tentang
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/posts/berita" class="nav-link {{ Request::is('admin/posts/berita*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sejarah</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts/kategori" class="nav-link {{ Request::is('admin/posts/kategori*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Visi dan Misi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts/kategori" class="nav-link {{ Request::is('admin/posts/kategori*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bendera</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts/kategori" class="nav-link {{ Request::is('admin/posts/kategori*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logo</p>
                        </a>
                    </li>

                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a href="/admin/tentang" class="nav-link {{ Request::is('admin/tentang*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                        Tentang
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/galeri" class="nav-link {{ Request::is('admin/galeri*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                        Galeri
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                        Pengumuman
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        {{-- </p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="/admin/siswa" class="nav-link {{ Request::is('admin/posts/siswa*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                        Pendaftar
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link {{ Request::is('admin/posts*') ? 'menu-is-opening menu-open' : '' }}">
                    <i class="nav-icon fas fa-sticky-note"></i>
                    <p>
                        Pendaftaran
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../index.html" class="nav-link {{ Request::is('admin/posts/guru*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Guru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link {{ Request::is('admin/posts/siswa*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Siswa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/staff" class="nav-link {{ Request::is('admin/posts/staff*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Staff</p>
                        </a>
                    </li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a href="/admin/banner" class="nav-link {{ Request::is('admin/banner*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                        Banner
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        User
                        {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>