@extends('ppdbtk.template')
@section('judul', 'TKIT BINA PRESTASI - Biodata Siswa')
@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center font-weight-500">BIODATA SISWA</h3>
                <p class="lead text-center">Silahkan isi form berikut untuk mendaftar di TKIT Bina Prestasi</p>
            </div>
            <div class="card-body">
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
                <form method="POST" action="{{ route('siswa.biodata.save') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nama Lengkap</label>
                        <input type="text" name="fullName" class="form-control" id="fullName"
                            value="{{ $biodata ? $biodata->nama_lengkap : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nickName" class="form-label">Nama Panggilan</label>
                        <input type="text" name="nickName" class="form-control" id="nickName"
                            value="{{ $biodata ? $biodata->nama_panggilan : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select name="gender" class="form-select" id="gender" required>
                            <option value="" selected disabled>Pilih</option>
                            <option value="Laki-laki"
                                {{ $biodata && $biodata->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan"
                                {{ $biodata && $biodata->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="birthPlaceDate" class="form-label">Tempat, Tanggal Lahir</label>
                        <input type="text" name="birthPlaceDate" class="form-control" id="birthPlaceDate"
                            value="{{ $biodata ? $biodata->tempat_tanggal_lahir : '' }}"
                            placeholder="Contoh: Jakarta, 1 Januari 2024" required />
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" class="form-select" id="agama" required>
                            <option value="" selected disabled>Pilih</option>
                            <option value="Islam" {{ $biodata && $biodata->agama == 'Islam' ? 'selected' : '' }}>Islam
                            </option>
                            <option value="Kristen Protestan"
                                {{ $biodata && $biodata->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan
                            </option>
                            <option value="Kristen Katolik"
                                {{ $biodata && $biodata->agama == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik
                            </option>
                            <option value="Hindu" {{ $biodata && $biodata->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                            </option>
                            <option value="Buddha" {{ $biodata && $biodata->agama == 'Buddha' ? 'selected' : '' }}>Buddha
                            </option>
                            <option value="Konghucu" {{ $biodata && $biodata->agama == 'Konghucu' ? 'selected' : '' }}>
                                Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anakKe" class="form-label">Anak ke-</label>
                        <input type="text" name="anakKe" class="form-control" id="anakKe"
                            value="{{ $biodata ? $biodata->anak_ke : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="parentNameAyah" class="form-label">Nama Ayah</label>
                        <input type="text" name="parentNameAyah" class="form-control" id="parentNameAyah"
                            value="{{ $biodata ? $biodata->nama_ayah : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="parentNameIbu" class="form-label">Nama Ibu</label>
                        <input type="text" name="parentNameIbu" class="form-control" id="parentNameIbu"
                            value="{{ $biodata ? $biodata->nama_ibu : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="profesiayah" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" name="profesiayah" class="form-control" id="profesiayah"
                            value="{{ $biodata ? $biodata->pekerjaan_ayah : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="profesiibu" class="form-label">Pekerjaan Ibu</label>
                        <input type="text" name="profesiibu" class="form-control" id="profesiibu"
                            value="{{ $biodata ? $biodata->pekerjaan_ibu : '' }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="telayah" class="form-label">No. HP/WhatsApp</label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="tel" name="telayah" class="form-control" id="telayah" placeholder="Nomor HP/WhatsApp"
                                pattern="[0-9]{9,15}" maxlength="15"
                                value="{{ $biodata ? $biodata->no_hp : '' }}" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Rumah</label>
                        <textarea name="address" class="form-control" id="address" rows="3" required>{{ $biodata ? $biodata->alamat : '' }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
