<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-primary">
                Selamat Datang {{ auth()->user()->name }} di halaman admin 😄😄
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pesan</span>
                <span class="info-box-number">
                    {{ $pesan }}
                    <small>Pesan</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Berita</span>
                <span class="info-box-number">
                    {{ $berita }}
                    <small>Berita</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-images"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Galeri</span>
                <span class="info-box-number">
                    {{ $galeri }}
                    <small>Gambar</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">
                    {{ $user }}
                    <small>User</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    {{-- <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sticky-note"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pendaftar</span>
                <span class="info-box-number">
                    10
                    <small>Pendaftar Guru</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div> --}}

    <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sticky-note"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pendaftar</span>
                <span class="info-box-number">
                    10
                    <small>Siswa</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    {{-- <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sticky-note"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pendaftar</span>
                <span class="info-box-number">
                    10
                    <small>Pendaftar Staff</small>
                </span>
            </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div> --}}
</div>