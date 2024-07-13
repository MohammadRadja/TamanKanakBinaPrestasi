@extends('ppdbtk.template')
@section('judul', 'Biodata Siswa')
@section('content')
    <div class="container">
        <h1 class="h3 mb-3">Biodata Siswa</h1>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">Biodata {{ $biodata->nama_lengkap }}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{ $biodata->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Panggilan</th>
                                    <td>{{ $biodata->nama_panggilan }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $biodata->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <td>{{ $biodata->tempat_tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $biodata->agama }}</td>
                                </tr>
                                <tr>
                                    <th>Anak Ke</th>
                                    <td>{{ $biodata->anak_ke }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td>{{ $biodata->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td>{{ $biodata->pekerjaan_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td>{{ $biodata->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td>{{ $biodata->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>No HP</th>
                                    <td>{{ $biodata->no_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $biodata->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('admin.data_siswa') }}" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection