@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Data Siswa')
@section('content')
    <div class="container">
        <h1 class="h3 mb-3">Data Siswa</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <span>Daftar Siswa</span>
                        <a href="{{ route('admin.tambah_siswa_view') }}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus me-1"></i> Tambah
                        </a>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $item)
                                        <tr>
                                            <td>{{ $item->nama_lengkap }}</td>
                                            <td>
                                                <div class="d-flex gap-2 flex-wrap justify-content-center">
                                                    <a href="{{ route('admin.view_biodata', $item->id) }}"
                                                        class="btn btn-primary btn-sm d-flex align-items-center">
                                                        <i class="fas fa-eye me-1"></i> Lihat Biodata
                                                    </a>
                                                    <a href="{{ route('admin.edit_siswa', $item->id) }}"
                                                        class="btn btn-warning btn-sm d-flex align-items-center">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-sm d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $item->id }}">
                                                        <i class="fas fa-trash me-1"></i> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">
                                                            Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus siswa ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('admin.delete_siswa', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
