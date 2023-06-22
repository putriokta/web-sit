<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4><b>{{ __('Data Orang Tua/Wali') }}</b></h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="/dataortu">
                        @csrf
                        <h5 class="mt-2">Data Ayah :</h5>

                        <div class="form-group mt-2">
                            <label for="nama_ayah">{{ __('Nama Lengkap') }}</label>
                            <input id="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ old('nama_ayah') }}" required>
                            @error('nama_ayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col">
                                <label for="ttl_a">{{ __('Tempat Lahir') }}</label>
                                <input id="ttl_a" type="text" class="form-control @error('ttl_a') is-invalid @enderror" name="ttl_a" value="{{ old('ttl_a') }}" required>
                                @error('ttl_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tl_a">{{ __('Tanggal Lahir') }}</label>
                                <input id="tl_a" type="date" class="form-control @error('tl_a') is-invalid @enderror" name="tl_a" value="{{ old('tl_a') }}" required>
                                @error('tl_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="agama_a">{{ __('Agama') }}</label>
                            <input id="agama_a" type="text" class="form-control @error('agama_a') is-invalid @enderror" name="agama_a" value="{{ old('agama_a') }}" required>
                            @error('agama_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_a">{{ __('Alamat Rumah') }}</label>
                            <input id="alamat_a" type="text" class="form-control @error('alamat_a') is-invalid @enderror" name="alamat_a" value="{{ old('alamat_a') }}" required>
                            @error('alamat_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp_a">{{ __('Telp HP') }}</label>
                            <input id="no_hp_a" type="number" class="form-control @error('no_hp_a') is-invalid @enderror" name="no_hp_a" value="{{ old('no_hp_a') }}" required>
                            @error('no_hp_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="pend_a">{{ __('Pendidikan Terakhir') }}</label>
                                    <select id="pend_a" class="form-control @error('pend_a') is-invalid @enderror" name="pend_a" required>
                                        <option value=""> -- Pendidikan Terakhir --</option>
                                        <option value="SMA/sederajat" {{ old('pend_a') == 'SMA/sederajat' ? 'selected' : '' }}>SMA/sederajat</option>
                                        <option value="Diploma" {{ old('pend_a') == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                        <option value="Strata 1" {{ old('pend_a') == 'Strata 1' ? 'selected' : '' }}>Strata 1</option>
                                        <option value="Strata 2" {{ old('pend_a') == 'Strata 2' ? 'selected' : '' }}>Strata 2</option>
                                        <option value="Strata 3" {{ old('pend_a') == 'Strata 3' ? 'selected' : '' }}>Strata 3</option>
                                    </select>
                                    @error('pend_a')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col">
                                <label for="jurusan_a">{{ __('Jurusan') }}</label>
                                <input id="jurusan_a" type="text" class="form-control @error('jurusan_a') is-invalid @enderror" name="jurusan_a" value="{{ old('jurusan_a') }}" required>
                                @error('jurusan_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email_a">{{ __('Email') }}</label>
                            <input id="email_a" type="text" class="form-control @error('email_a') is-invalid @enderror" name="email_a" value="{{ old('email_a') }}" required>
                            @error('email_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="hubungan_a">{{ __('Hubungan dengan Siswa') }}</label>
                            <select id="hubungan_a" class="form-control @error('hubungan_a') is-invalid @enderror" name="hubungan_a" required>
                                <option value="">-- Pilih Hubungan dengan Siswa --</option>
                                <option value="Kandung" {{ old('hubungan_a') == 'Kandung' ? 'selected' : '' }}>Kandung</option>
                                <option value="Tiri" {{ old('hubungan_a') == 'Tiri' ? 'selected' : '' }}>Tiri</option>
                                <option value="Angkat" {{ old('hubungan_a') == 'Angkat' ? 'selected' : '' }}>Angkat</option>
                            </select>
                            @error('hubungan_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="pekerjaan_a">{{ __('Pekerjaan') }}</label>
                            <input id="pekerjaan_a" type="text" class="form-control @error('pekerjaan_a') is-invalid @enderror" name="pekerjaan_a" value="{{ old('pekerjaan_a') }}" required>
                            @error('pekerjaan_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="nama_perusahaan_a">{{ __('Nama Perusahaan') }}</label>
                                <input id="nama_perusahaan_a" type="text" class="form-control @error('nama_perusahaan_a') is-invalid @enderror" name="nama_perusahaan_a" value="{{ old('nama_perusahaan_a') }}" required>
                                @error('nama_perusahaan_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="bidang_perusahaan_a">{{ __('Bidang Perusahaan') }}</label>
                                <input id="bidang_perusahaan_a" type="text" class="form-control @error('bidang_perusahaan_a') is-invalid @enderror" name="bidang_perusahaan_a" value="{{ old('bidang_perusahaan_a') }}" required>
                                @error('bidang_perusahaan_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_kantor_a">{{ __('Alamat Kantor') }}</label>
                            <input id="alamat_kantor_a" type="text" class="form-control @error('alamat_kantor_a') is-invalid @enderror" name="alamat_kantor_a" value="{{ old('alamat_kantor_a') }}" required>
                            @error('alamat_kantor_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="penghasilan_perbulan_a">{{ __('Penghasilan/ bulan') }}</label>
                            <select id="penghasilan_perbulan_a" class="form-control @error('penghasilan_perbulan_a') is-invalid @enderror" name="penghasilan_perbulan_a" required>
                                <option value="">-- Pilih Penghasilan/ bulan --</option>
                                <option value="3-5 juta" {{ old('penghasilan_perbulan_a') == '3-5 juta' ? 'selected' : '' }}>3-5 juta</option>
                                <option value="6-10 juta" {{ old('penghasilan_perbulan_a') == '6-10 juta' ? 'selected' : '' }}>6-10 juta</option>
                                <option value="11-15 juta" {{ old('penghasilan_perbulan_a') == '11-15 juta' ? 'selected' : '' }}>11-15 juta</option>
                                <option value="diatas 15 juta" {{ old('penghasilan_perbulan_a') == 'diatas 15 juta' ? 'selected' : '' }}>diatas 15 juta</option>
                            </select>
                            @error('penghasilan_perbulan_a')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <h5 class="mt-5">Data Ibu :</h5>

                        <div class="form-group mt-2">
                            <label for="nama_ibu">{{ __('Nama Lengkap') }}</label>
                            <input id="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                            @error('nama_ibu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col">
                                <label for="ttl_i">{{ __('Tempat Lahir') }}</label>
                                <input id="ttl_i" type="text" class="form-control @error('ttl_i') is-invalid @enderror" name="ttl_i" value="{{ old('ttl_i') }}" required>
                                @error('ttl_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tl_i">{{ __('Tanggal Lahir') }}</label>
                                <input id="tl_i" type="date" class="form-control @error('tl_i') is-invalid @enderror" name="tl_i" value="{{ old('tl_i') }}" required>
                                @error('tl_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="agama_i">{{ __('Agama') }}</label>
                            <input id="agama_i" type="text" class="form-control @error('agama_i') is-invalid @enderror" name="agama_i" value="{{ old('agama_i') }}" required>
                            @error('agama_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_i">{{ __('Alamat Rumah') }}</label>
                            <input id="alamat_i" type="text" class="form-control @error('alamat_i') is-invalid @enderror" name="alamat_i" value="{{ old('alamat_i') }}" required>
                            @error('alamat_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp_i">{{ __('Telp HP') }}</label>
                            <input id="no_hp_i" type="text" class="form-control @error('no_hp_i') is-invalid @enderror" name="no_hp_i" value="{{ old('no_hp_i') }}" required>
                            @error('no_hp_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="pend_i">{{ __('Pendidikan Terakhir') }}</label>
                                    <select id="pend_i" class="form-control @error('pend_i') is-invalid @enderror" name="pend_i" required>
                                        <option value=""> -- Pendidikan Terakhir --</option>
                                        <option value="SMA/sederajat" {{ old('pend_i') == 'SMA/sederajat' ? 'selected' : '' }}>SMA/sederajat</option>
                                        <option value="Diploma" {{ old('pend_i') == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                        <option value="Strata 1" {{ old('pend_i') == 'Strata 1' ? 'selected' : '' }}>Strata 1</option>
                                        <option value="Strata 2" {{ old('pend_i') == 'Strata 2' ? 'selected' : '' }}>Strata 2</option>
                                        <option value="Strata 3" {{ old('pend_i') == 'Strata 3' ? 'selected' : '' }}>Strata 3</option>
                                    </select>
                                    @error('pend_i')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col">
                                <label for="jurusan_i">{{ __('Jurusan') }}</label>
                                <input id="jurusan_i" type="text" class="form-control @error('jurusan_i') is-invalid @enderror" name="jurusan_i" value="{{ old('jurusan_i') }}" required>
                                @error('jurusan_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email_i">{{ __('Email') }}</label>
                            <input id="email_i" type="text" class="form-control @error('email_i') is-invalid @enderror" name="email_i" value="{{ old('email_i') }}" required>
                            @error('email_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="hubungan_i">{{ __('Hubungan dengan Siswa') }}</label>
                            <select id="hubungan_i" class="form-control @error('hubungan_i') is-invalid @enderror" name="hubungan_i" required>
                                <option value="">-- Pilih Hubungan dengan Siswa --</option>
                                <option value="Kandung" {{ old('hubungan_i') == 'Kandung' ? 'selected' : '' }}>Kandung</option>
                                <option value="Tiri" {{ old('hubungan_i') == 'Tiri' ? 'selected' : '' }}>Tiri</option>
                                <option value="Angkat" {{ old('hubungan_i') == 'Angkat' ? 'selected' : '' }}>Angkat</option>
                            </select>
                            @error('hubungan_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="pekerjaan_i">{{ __('Pekerjaan') }}</label>
                            <input id="pekerjaan_i" type="text" class="form-control @error('pekerjaan_i') is-invalid @enderror" name="pekerjaan_i" value="{{ old('pekerjaan_i') }}" required>
                            @error('pekerjaan_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="nama_perusahaan_i">{{ __('Nama Perusahaan') }}</label>
                                <input id="nama_perusahaan_i" type="text" class="form-control @error('nama_perusahaan_i') is-invalid @enderror" name="nama_perusahaan_i" value="{{ old('nama_perusahaan_i') }}" required>
                                @error('nama_perusahaan_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="bidang_perusahaan_i">{{ __('Bidang Perusahaan') }}</label>
                                <input id="bidang_perusahaan_i" type="text" class="form-control @error('bidang_perusahaan_i') is-invalid @enderror" name="bidang_perusahaan_i" value="{{ old('bidang_perusahaan_i') }}" required>
                                @error('bidang_perusahaan_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_kantor_i">{{ __('Alamat Kantor') }}</label>
                            <input id="alamat_kantor_i" type="text" class="form-control @error('alamat_kantor_i') is-invalid @enderror" name="alamat_kantor_i" value="{{ old('alamat_kantor_i') }}" required>
                            @error('alamat_kantor_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="penghasilan_perbulan_i">{{ __('Penghasilan/ bulan') }}</label>
                            <select id="penghasilan_perbulan_i" class="form-control @error('penghasilan_perbulan_i') is-invalid @enderror" name="penghasilan_perbulan_i" required>
                                <option value="">-- Pilih Penghasilan/ bulan --</option>
                                <option value="3-5 juta" {{ old('penghasilan_perbulan_i') == '3-5 juta' ? 'selected' : '' }}>3-5 juta</option>
                                <option value="6-10 juta" {{ old('penghasilan_perbulan_i') == '6-10 juta' ? 'selected' : '' }}>6-10 juta</option>
                                <option value="11-15 juta" {{ old('penghasilan_perbulan_i') == '11-15 juta' ? 'selected' : '' }}>11-15 juta</option>
                                <option value="diatas 15 juta" {{ old('penghasilan_perbulan_i') == 'diatas 15 juta' ? 'selected' : '' }}>diatas 15 juta</option>
                            </select>
                            @error('penghasilan_perbulan_i')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <h5 class="mt-5">Data Wali :</h5>

                        <div class="form-group mt-2">
                            <label for="nama_wali">{{ __('Nama Lengkap') }}</label>
                            <input id="nama_wali" type="text" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali" value="{{ old('nama_wali') }}">
                            @error('nama_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col">
                                <label for="ttl_w">{{ __('Tempat Lahir') }}</label>
                                <input id="ttl_w" type="text" class="form-control @error('ttl_w') is-invalid @enderror" name="ttl_w" value="{{ old('ttl_w') }}">
                                @error('ttl_w')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tl_w">{{ __('Tanggal Lahir') }}</label>
                                <input id="tl_w" type="date" class="form-control @error('tl_w') is-invalid @enderror" name="tl_w" value="{{ old('tl_w') }}">
                                @error('tl_w')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="agama_w">{{ __('Agama') }}</label>
                            <input id="agama_w" type="text" class="form-control @error('agama_w') is-invalid @enderror" name="agama_w" value="{{ old('agama_w') }}">
                            @error('agama_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_w">{{ __('Alamat Rumah') }}</label>
                            <input id="alamat_w" type="text" class="form-control @error('alamat_w') is-invalid @enderror" name="alamat_w" value="{{ old('alamat_w') }}">
                            @error('alamat_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp_w">{{ __('Telp HP') }}</label>
                            <input id="no_hp_w" type="text" class="form-control @error('no_hp_w') is-invalid @enderror" name="no_hp_w" value="{{ old('no_hp_w') }}">
                            @error('no_hp_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="pend_w">{{ __('Pendidikan Terakhir') }}</label>
                                    <select id="pend_w" class="form-control @error('pend_w') is-invalid @enderror" name="pend_w">
                                        <option value=""> -- Pendidikan Terakhir --</option>
                                        <option value="SMA/sederajat" {{ old('pend_w') == 'SMA/sederajat' ? 'selected' : '' }}>SMA/sederajat</option>
                                        <option value="Diploma" {{ old('pend_w') == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                        <option value="Strata 1" {{ old('pend_w') == 'Strata 1' ? 'selected' : '' }}>Strata 1</option>
                                        <option value="Strata 2" {{ old('pend_w') == 'Strata 2' ? 'selected' : '' }}>Strata 2</option>
                                        <option value="Strata 3" {{ old('pend_w') == 'Strata 3' ? 'selected' : '' }}>Strata 3</option>
                                    </select>
                                    @error('pend_w')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col">
                                <label for="jurusan_w">{{ __('Jurusan') }}</label>
                                <input id="jurusan_w" type="text" class="form-control @error('jurusan_w') is-invalid @enderror" name="jurusan_w" value="{{ old('jurusan_w') }}">
                                @error('jurusan_w')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email_w">{{ __('Email') }}</label>
                            <input id="email_w" type="text" class="form-control @error('email_w') is-invalid @enderror" name="email_w" value="{{ old('email_w') }}">
                            @error('email_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="hubungan_w">{{ __('Hubungan dengan Siswa') }}</label>
                            <select id="hubungan_w" class="form-control @error('hubungan_w') is-invalid @enderror" name="hubungan_w">
                                <option value="">-- Pilih Hubungan dengan Siswa --</option>
                                <option value="Kandung" {{ old('hubungan_w') == 'Kandung' ? 'selected' : '' }}>Kandung</option>
                                <option value="Tiri" {{ old('hubungan_w') == 'Tiri' ? 'selected' : '' }}>Tiri</option>
                                <option value="Angkat" {{ old('hubungan_w') == 'Angkat' ? 'selected' : '' }}>Angkat</option>
                            </select>
                            @error('hubungan_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="pekerjaan_w">{{ __('Pekerjaan') }}</label>
                            <input id="pekerjaan_w" type="text" class="form-control @error('pekerjaan_w') is-invalid @enderror" name="pekerjaan_w" value="{{ old('pekerjaan_w') }}">
                            @error('pekerjaan_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col">
                                <label for="nama_perusahaan_w">{{ __('Nama Perusahaan') }}</label>
                                <input id="nama_perusahaan_w" type="text" class="form-control @error('nama_perusahaan_w') is-invalid @enderror" name="nama_perusahaan_w" value="{{ old('nama_perusahaan_w') }}">
                                @error('nama_perusahaan_w')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="bidang_perusahaan_w">{{ __('Bidang Perusahaan') }}</label>
                                <input id="bidang_perusahaan_w" type="text" class="form-control @error('bidang_perusahaan_w') is-invalid @enderror" name="bidang_perusahaan_w" value="{{ old('bidang_perusahaan_w') }}">
                                @error('bidang_perusahaan_w')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat_kantor_w">{{ __('Alamat Kantor') }}</label>
                            <input id="alamat_kantor_w" type="text" class="form-control @error('alamat_kantor_w') is-invalid @enderror" name="alamat_kantor_w" value="{{ old('alamat_kantor_w') }}">
                            @error('alamat_kantor_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="penghasilan_perbulan_w">{{ __('Penghasilan/ bulan') }}</label>
                            <select id="penghasilan_perbulan_w" class="form-control @error('penghasilan_perbulan_w') is-invalid @enderror" name="penghasilan_perbulan_w">
                                <option value="">-- Pilih Penghasilan/ bulan --</option>
                                <option value="3-5 juta" {{ old('penghasilan_perbulan_w') == '3-5 juta' ? 'selected' : '' }}>3-5 juta</option>
                                <option value="6-10 juta" {{ old('penghasilan_perbulan_w') == '6-10 juta' ? 'selected' : '' }}>6-10 juta</option>
                                <option value="11-15 juta" {{ old('penghasilan_perbulan_w') == '11-15 juta' ? 'selected' : '' }}>11-15 juta</option>
                                <option value="diatas 15 juta" {{ old('penghasilan_perbulan_w') == 'diatas 15 juta' ? 'selected' : '' }}>diatas 15 juta</option>
                            </select>
                            @error('penghasilan_perbulan_w')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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