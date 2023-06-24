<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary bg-gradient shadow ">
    <div class="container">
      <a href="#"><img class ="img text-center" src="img/logo/LOGO.png" width ="47px" height ="45px" alt=""></a>
      <a class="navbar-brand" href="#">SIT Ibnu Hajar Balikpapan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang") ? 'active' : '' }}" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Berita") ? 'active' : '' }}" href="/artikel">Berita</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($title === "Pengumuman") ? 'active' : '' }}" href="/pengumuman">Pengumuman</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/galeri">Galeri</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Siswa") ? 'active' : '' }}" href="/siswa">Pendafataran</a>
          </li>
          {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/siswa" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pendaftaran
          </a>
          {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item {{ ($title === "Guru") ? 'active' : '' }}" href="/guru">Guru</a></li>
            <li><a class="dropdown-item {{ ($title === "Siswa") ? 'active' : '' }}" href="/siswa">Siswa</a></li>
            <li><a class="dropdown-item {{ ($title === "Staff") ? 'active' : '' }}" href="/staff">Staff</a></li>
          </ul> --}}
        {{-- </li> --}}
        {{-- </ul>  --}}

      </div>
      <div class="row d-flex">
        <div class="col">
          @auth
            @if(Auth::user()->role_id == 1)
            <a href="/admin/dashboard" class="btn btn-outline-light"><i class="fas fa-user"></i></a>
            @elseif(Auth::user()->role_id == 2)
            <a href="/logout" class="btn btn-outline-light"><i class="fas fa-sign-out-alt"></i></a>
            @endif
          @else 
          <a href="/login" class="btn btn-outline-light" >Masuk</a>
          <a href="/daftar" class="btn btn-light" >Daftar</a>
          @endauth
        </div>
      </div> 
    </div>
  </nav>
</header>