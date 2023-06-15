<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($kategori))
                <form action="/admin/posts/kategori/{{ $kategori->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    
                @else
                <form action="/admin/posts/kategori/" method="POST" enctype="multipart/form-data">
                    
                @endif
                
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="name" placeholder="Title" class="form-control @error('name') is-invalid @enderror" value="{{ isset($kategori) ? $kategori->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>