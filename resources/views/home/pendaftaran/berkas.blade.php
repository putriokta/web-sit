<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4><b>{{ __('Kelengkapan Berkas') }}</b></h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="/berkas">
                        @csrf
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">KTP Kedua Orang Tua</label>
                                <input type="file" name="ktp" placeholder="******" class="form-control @error('ktp') is-invalid @enderror">

                                @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror  
                            </div>
                        </div>
                        
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Akta Kelahiran</label>
                                <input type="file" name="akta" placeholder="******" class="form-control @error('akta') is-invalid @enderror">

                                @error('akta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror  
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Kartu Keluarga</label>
                                <input type="file" name="kk" placeholder="******" class="form-control @error('kk') is-invalid @enderror">

                                @error('kk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
   
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Foto Berwarna 3x4</label>
                                <input type="file" name="foto" placeholder="******" class="form-control @error('foto') is-invalid @enderror">

                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Raport Semester Akhir (bagi siswa pindahan)</label>
                                <input type="file" name="rapot_semester_akhir" placeholder="******" class="form-control @error('rapot_semester_akhir') is-invalid @enderror">

                                @error('rapot_semester_akhir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Surat Keterangan Lulus (bagi siswa mendaftar SMP)</label>
                                <input type="file" name="surat_lulus" placeholder="******" class="form-control @error('surat_lulus') is-invalid @enderror">

                                @error('surat_lulus')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Surat Hasil Minat Manat Bakat (bagi siswa mendaftar SMP)</label>
                                <input type="file" name="surat_minat_bakat" placeholder="******" class="form-control @error('surat_minat_bakat') is-invalid @enderror">

                                @error('surat_minat_bakat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Surat Keterangan Sehat</label>
                                <input type="file" name="surat_sehat" placeholder="******" class="form-control @error('surat_sehat') is-invalid @enderror">

                                @error('surat_sehat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="">Buku Nikah</label>
                                <input type="file" name="buku_nikah" placeholder="******" class="form-control @error('buku_nikah') is-invalid @enderror">

                                @error('buku_nikah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror    
                            </div>
                        </div> 

                        <div class="form-group row mt-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>