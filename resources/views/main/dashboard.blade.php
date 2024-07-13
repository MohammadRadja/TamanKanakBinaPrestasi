@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Dashboard')
@section('content')
    <div class="container">
        <h1 class="h3 mb-3">DASHBOARD</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card w-100">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-user-circle"></i> Informasi Siswa
                    </div>
                    <div class="card-body">
                        @isset($biodata)
                            <div class="mb-3">
                                <p><i class="fas fa-user"></i> <strong>Nama:</strong> {{ $biodata->nama_lengkap }}</p>
                                <p><i class="fas fa-map-marker-alt"></i> <strong>Alamat:</strong> {{ $biodata->alamat }}</p>
                                <p><i class="fas fa-phone"></i> <strong>No HP:</strong> {{ $biodata->no_hp }}</p>
                                <a href="{{ route('siswa.biodata', Session::has('pengguna_id') ? Session::get('pengguna_id') : '') }}"
                                    class="btn btn-primary mt-3">
                                    <i class="fas fa-edit"></i> Edit Biodata
                                </a>
                            </div>
                        @else
                            <p class="text-muted">Biodata siswa belum diisi. Silahkan isi biodata siswa untuk daftar.</p>
                            <a href="{{ route('siswa.biodata', Session::has('pengguna_id') ? Session::get('pengguna_id') : '') }}"
                                class="btn btn-primary mt-3">
                                <i class="fas fa-edit"></i> Isi Biodata
                            </a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection