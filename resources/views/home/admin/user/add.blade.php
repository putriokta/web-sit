<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($user))
                <form action="/admin/user/{{ $user->id }}" method="POST">
                    @method('PUT')
                    
                @else
                <form action="/admin/user/" method="POST">
                    
                @endif
                
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

                    <div class="formselect">
                        <label for="role">Role</label>
                        <select class="form-control" aria-label="Default select example" name="role_id" id="role" required>
                            <option></option>
                            @foreach ($roles as $role)
                                @if (old('role_id') == $role->id)
                                <option value="{{ $role->id }}" selected>{{ $role->role }}</option>
                                @else
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                                @endif
                            @endforeach
                        </select>

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
                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>