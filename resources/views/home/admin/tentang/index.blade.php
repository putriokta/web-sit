<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="/admin/tentang/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                
                    @csrf
                    <div class="row">
                        <div class="col md 6">
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <input type="text" name="name" placeholder="SIT IBNU HAJAR BALIKPAPAN" class="form-control @error('name') is-invalid @enderror" value="SIT IBNU HAJAR BALIKPAPAN">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="">Deskripsi Home</label>
                                <input type="text" name="desc" placeholder="Deskripsi" class="form-control @error('desc') is-invalid @enderror" value="">
                                @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Cover Home</label>
                                <input type="file" name="cover" placeholder="******" class="form-control @error('cover') is-invalid @enderror">
        
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
        
                                @if (isset($tentang))
                                    <img src="/{{ $tentang->cover }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Bendera</label>
                                <input type="file" name="bendera" placeholder="******" class="form-control @error('bendera') is-invalid @enderror">
        
                                @error('bendera')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
        
                                @if (isset($tentang))
                                    <img src="/{{ $tentang->bendera }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Logo Yayasan</label>
                                <input type="file" name="logo1" placeholder="******" class="form-control @error('logo1') is-invalid @enderror">
        
                                @error('logo1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
        
                                @if (isset($tentang))
                                    <img src="/{{ $tentang->logo1 }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Logo Sekolah</label>
                                <input type="file" name="logo2" placeholder="******" class="form-control @error('logo2') is-invalid @enderror">
        
                                @error('logo2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
        
                                @if (isset($tentang))
                                    <img src="/{{ $tentang->logo2 }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sejarah Ibnu Hajar</label>
                                <textarea type="text" name="desc1" placeholder="Deskripsi" class="form-control @error('desc1') is-invalid @enderror">{{ isset($tentang) ? $tentang->desc1 : old('desc1') }}</textarea>

                                @error('desc1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Visi dan Misi</label>
                                <textarea type="text" name="desc2" placeholder="Deskripsi" class="form-control @error('desc2') is-invalid @enderror">{{ isset($tentang) ? $tentang->desc2 : old('desc2') }}</textarea>

                                @error('desc2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Filosofi Bendera</label>
                                <textarea type="text" name="desc3" placeholder="Deskripsi" class="form-control @error('desc3') is-invalid @enderror">{{ isset($tentang) ? $tentang->desc3 : old('desc3') }}</textarea>

                                @error('desc3')
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