@extends('master.template')
@section('Judul', 'Login')
@section('content')
    <div class="container-fluid pt-5 pb-5 bg-light menu">
        <div class="container text-center">
            <h1 class="display-2 mb-4">LOGIN</h1>
        </div>
        <div class="container">
            <form method="POST" action="{{ route('post.login') }}" class="row g-3">
                @csrf
                <div class="col-md-6 mx-auto col-10"> 
                    <div class="card shadow-lg p-4">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="text-center">
                            <p>Belum Punya Akun? <a href="/register" class="text-decoration-none">Register Disini</a></p>
                        </div>
                        <div class="mb-3 text-center">
                            <p>Lupa Password? <a href="/siswa/forgot-password" class="text-decoration-none">Reset Password</a></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
