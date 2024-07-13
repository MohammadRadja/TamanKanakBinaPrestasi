@extends('master.template')
@section('Judul', 'TKIT BINA PRESTASI - Register Siswa')
@section('content')
    <div class="container-fluid pt-5 pb-5 bg-light menu">
        <div class="container text-center">
            <h1 class="display-2 mb-4">REGISTER</h1>
        </div>
        <div class="container">
            <form method="POST" action="/register" class="row g-1">
                @csrf
                <div class="col-md-6 w-100 mx-auto">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                <div class="col-md-6 mx-auto col-10"> 
                    <div class="card shadow-lg p-4">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 text-center">
                            <p>Sudah Punya Akun? <a href="/login" class="text-decoration-none">Login Disini</a></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
