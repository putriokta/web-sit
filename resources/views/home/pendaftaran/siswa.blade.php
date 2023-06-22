<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4><b>{{ __('Form Pendaftaran Siswa') }}</b></h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="/siswa">
                        @csrf
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="nama_lengkap">{{ __('Nama Lengkap') }}</label>
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autofocus>
                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="col">
                                    <label for="nama_panggilan">{{ __('Nama Panggilan') }}</label>
                                    <input id="nama_panggilan" type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" name="nama_panggilan" value="{{ old('nama_panggilan') }}" required>
                                    @error('nama_panggilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="tempat_tanggal_lahir">{{ __('Tempat Lahir') }}</label>
                                <input id="tempat_tanggal_lahir" type="text" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') }}" required>
                                @error('tempat_tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                            <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="anak_ke">{{ __('Anak Ke-') }}</label>
                                <input id="anak_ke" type="number" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" value="{{ old('anak_ke') }}" required>
                                @error('anak_ke')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="jumlah_saudara">{{ __('Jumlah Saudara') }}</label>
                                <input id="jumlah_saudara" type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" name="jumlah_saudara" value="{{ old('jumlah_saudara') }}" required>
                                @error('jumlah_saudara')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="keadaan_siswa">{{ __('Keadaan Siswa') }}</label>
                            <select id="keadaan_siswa" class="form-control @error('keadaan_siswa') is-invalid @enderror" name="keadaan_siswa" required>
                                <option value="">-- Pilih Keadaan Siswa --</option>
                                <option value="Orang Tua Lengkap" {{ old('keadaan_siswa') == 'Orang Tua Lengkap' ? 'selected' : '' }}>Orang Tua Lengkap</option>
                                <option value="Yatim Piatu" {{ old('keadaan_siswa') == 'Yatim Piatu' ? 'selected' : '' }}>Yatim Piatu</option>
                                <option value="Yatim" {{ old('keadaan_siswa') == 'Yatim' ? 'selected' : '' }}>Yatim</option>
                                <option value="Piatu" {{ old('keadaan_siswa') == 'Piatu' ? 'selected' : '' }}>Piatu</option>
                            </select>
                            @error('keadaan_siswa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="agama">{{ __('Agama') }}</label>
                            <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required>
                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="golongan_darah">{{ __('Golongan Darah') }}</label>
                            <input id="golongan_darah" type="text" class="form-control @error('golongan_darah') is-invalid @enderror" name="golongan_darah" value="{{ old('golongan_darah') }}" required>
                            @error('golongan_darah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="berat_badan">{{ __('Berat Badan') }}</label>
                                <input id="berat_badan" type="number" class="form-control @error('berat_badan') is-invalid @enderror" name="berat_badan" value="{{ old('berat_badan') }}" required>
                                @error('berat_badan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tinggi_badan">{{ __('Tinggi Badan') }}</label>
                                <input id="tinggi_badan" type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" name="tinggi_badan" value="{{ old('tinggi_badan') }}" required>
                                @error('tinggi_badan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="lingkar_kepala">{{ __('Lingkar Kepala') }}</label>
                                <input id="lingkar_kepala" type="number" class="form-control @error('lingkar_kepala') is-invalid @enderror" name="lingkar_kepala" value="{{ old('lingkar_kepala') }}" required>
                                @error('lingkar_kepala')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="bahasa_sehari_hari">{{ __('Bahasa Sehari-hari') }}</label>
                            <input id="bahasa_sehari_hari" type="text" class="form-control @error('bahasa_sehari_hari') is-invalid @enderror" name="bahasa_sehari_hari" value="{{ old('bahasa_sehari_hari') }}" required>
                            @error('bahasa_sehari_hari')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="jarak_rumah">{{ __('Jarak Rumah ke Sekolah') }}</label>
                            <input id="jarak_rumah" type="number" class="form-control @error('jarak_rumah') is-invalid @enderror" name="jarak_rumah" value="{{ old('jarak_rumah') }}" required>
                            @error('jarak_rumah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="tinggal_bersama">{{ __('Siswa Tinggal Bersama') }}</label>
                            <input id="tinggal_bersama" type="text" class="form-control @error('tinggal_bersama') is-invalid @enderror" name="tinggal_bersama" value="{{ old('tinggal_bersama') }}" required>
                            @error('tinggal_bersama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="asal_sekolah">{{ __('Asal Sekolah') }}</label>
                            <input id="asal_sekolah" type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required>
                            @error('asal_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="alamat_sekolah">{{ __('Alamat Asal Sekolah') }}</label>
                            <input id="alamat_sekolah" type="text" class="form-control @error('alamat_sekolah') is-invalid @enderror" name="alamat_sekolah" value="{{ old('alamat_sekolah') }}" required>
                            @error('alamat_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="jenis_sekolah">{{ __('Jenis Sekolah') }}</label>
                            <select id="jenis_sekolah" class="form-control @error('jenis_sekolah') is-invalid @enderror" name="jenis_sekolah" required>
                                <option value="">-- Pilih Jenis Sekolah --</option>
                                @foreach ($Jenis as $j)
                                    @if (old('jenis_sekolah') == $j->id)
                                        <option value="{{ $j->id }}" selected> {{ $j->jenis_sekolah }} </option>
                                    @else
                                        <option value="{{ $j->id }}"> {{ $j->jenis_sekolah }} </option>
                                    @endif
                                @endforeach
                            </select>
                            @error('jenis_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br/>

                        <div class="form-group row mt-3">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Selanjutnya
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