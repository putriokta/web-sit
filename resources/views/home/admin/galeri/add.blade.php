<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($galeri))
                <form action="/admin/galeri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    
                @else
                <form action="/admin/galeri/" method="POST" enctype="multipart/form-data">
                    
                @endif
                
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ isset($galeri) ? $galeri->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="desc" class="form-control" id="" cols="30" rows="10">{{ isset($galeri) ? $galeri->desc : '' }}</textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" placeholder="******" class="form-control @error('gambar') is-invalid @enderror">
                         
                        

                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($galeri))
                            <img src="/{{ $galeri->gambar }}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>