@extends('giaodien.macdinh')
@section('tieude','Dang Nhap')
@section('main')
<div class="container mt-4">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="{{route("login.post")}}" method="post">
                    @csrf
                    <h3 class="text-center text-info">Dang Nhap</h3>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error')->first() }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="email" class="text-info">Email:</label><br>
                        <input type="text" name="email" id="email" class="form-control">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="text" name="password" id="password" class="form-control">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Dang nhap">
                    </div>
                    <div id="register-link" class="text-right">
                        <a href="{{route('register')}}" class="text-info">Dang Ky</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection