@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Tambah Data Siswa')
@section('content')
    <div class="container">
        <h1 class="h3 mb-3">Tambah Data Siswa</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.tambah_siswa') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_tanggal_lahir" class="form-label">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" 
                                placeholder="Contoh: Jakarta, 1 Januari 2024" required />
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" class="form-select" id="agama" required>
                                <option value="" selected disabled>Pilih</option>
                                <option value="Islam">Islam
                                </option>
                                <option value="Kristen Protestan">Kristen Protestan
                                </option>
                                <option value="Kristen Katolik">Kristen Katolik
                                </option>
                                <option value="Hindu">Hindu
                                </option>
                                <option value="Buddha">Buddha
                                </option>
                                <option value="Konghucu">
                                    Konghucu</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="anak_ke" class="form-label">Anak Ke-</label>
                                <input type="text" class="form-control" id="anak_ke" name="anak_ke" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
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
                            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                            <a href="{{ route('admin.data_siswa') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
