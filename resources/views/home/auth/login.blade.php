<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center mb-3"><strong><h4>Masuk</h4></strong></div>
                    <img src="img/logo/LOGO.png" alt="" class="w-20 mt-1 mx-auto d-block" style="height: 70px;"><br/>

                   @if(session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">{{ session('loginError') }}</div>
                   @endif
                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=""><b>Email</b></label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <a href="/daftar" class="text-decoration-none">Belum punya akun?</a><br/>
                        
                        <button class="btn btn-primary mt-3 px-5">Masuk <i class="fas fa-sign-in-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <img src="/img/masuk.png" width="100%" alt="">
        </div>
    </div>
</div>