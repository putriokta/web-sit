<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                @if (isset($berita))
                    <form action="/admin/posts/berita/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    
                @else
                    <form action="/admin/posts/berita/" method="POST" enctype="multipart/form-data">
                    
                @endif
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ isset($berita) ? $berita->title : old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Kategori</label>
                               <select name="kategori_id" class="form-control" id="">
                                <option value="">--KATEGORI--</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ isset($kategori) ? $item->id == $berita->kategori_id ? 'selected' : '' : ''  }}>{{ $item->name }}</option>
                                    
                                @endforeach
                               </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Cover</label>
                                <input type="file" name="cover" placeholder="******" class="form-control @error('cover') is-invalid @enderror">

                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if (isset($berita))
                                    <img src="/{{ $berita->cover }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea type="text" id="summernote" name="body" placeholder="Body" class="form-control @error('body') is-invalid @enderror">{{ isset($berita) ? $berita->body : old('body') }}</textarea>

                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>