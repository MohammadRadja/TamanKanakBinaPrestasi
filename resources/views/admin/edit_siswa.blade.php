@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Edit Data Siswa')
@section('content')
    <div class="container">
        <h1 class="h3 mb-3">Edit Data Siswa</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.update_siswa', $siswa->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="{{ $siswa->nama_lengkap }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan"
                                    value="{{ $biodata->nama_panggilan }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="Laki-laki"
                                        {{ $biodata->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ $biodata->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_tanggal_lahir" class="form-label">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tempat_tanggal_lahir"
                                    name="tempat_tanggal_lahir" value="{{ $biodata->tempat_tanggal_lahir }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama"
                                    value="{{ $biodata->agama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="anak_ke" class="form-label">Anak Ke-</label>
                                <input type="number" class="form-control" id="anak_ke" name="anak_ke"
                                    value="{{ $biodata->anak_ke }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                    value="{{ $biodata->nama_ayah }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                    value="{{ $biodata->nama_ibu }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                    value="{{ $biodata->pekerjaan_ayah }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                    value="{{ $biodata->pekerjaan_ibu }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    value="{{ $biodata->no_hp }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $biodata->alamat }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('admin.data_siswa') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection