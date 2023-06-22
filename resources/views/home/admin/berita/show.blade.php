<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">

                <a href="/admin/posts/berita" class="btn btn-primary px-4"><i class="fas fa-arrow-left"></i>Kembali</a>
                <h4><b>{{ $berita->title }}</b></h4> 
                <p>Tanggal dibuat {{ $berita->created_at }}</p>

                <img src="/{{ $berita->cover }}" width="100%" alt="">

                <div class="py-3">
                    <p>{!! $berita->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>