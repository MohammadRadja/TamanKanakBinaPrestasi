@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-user-circle"></i> Informasi Admin
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <p><strong>Nama:</strong> {{ $admin->nama_lengkap }}</p>
                            <p><strong>Email:</strong> {{ $admin->email }}</p>
                            <p><strong>Role:</strong> Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection