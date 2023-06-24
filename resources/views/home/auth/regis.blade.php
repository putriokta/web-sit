<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <img src="/img/masuk.png" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center mb-3"><strong><h4>Daftar</h4></strong></div>
                    <img src="img/logo/LOGO.png" alt="" class="w-20 mt-1 mx-auto d-block" style="height: 70px;"><br/>
                    <form action="/regiss" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="name" placeholder="Username" class="form-control @error('name') is-invalid @enderror" value="{{ isset($user) ? $user->name : old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ isset($user) ? $user->email : old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="******" class="form-control @error('password') is-invalid @enderror" value="{{ old('password')}}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" name="re_password" placeholder="******" class="form-control @error('re_password') is-invalid @enderror" value="{{ old('re_password')}}">
                                @error('re_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                            <a href="/login" class="text-decoration-none">Sudah punya akun?</a><br/>
                            <button type="submit"  class="btn btn-primary mt-3 px-5 justify-content-end">Daftar <i class="fas fa-sign-in-alt"></i></button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>