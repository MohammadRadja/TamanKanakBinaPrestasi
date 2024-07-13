@extends('master.template')
@section('Judul', 'Pendaftaran')
@section('content')
    <!-- pendaftaran -->
    <div class="container-fluid pt-5 pb-5 bg-light menu">
        <div class="container text-center">
            <h1>PENDAFTARAN</h1>
            <p class="lead">Silahkan isi form berikut untuk mendaftar di TKIT BINA PRESTASI</p>
        </div>
        <div class="container">
            <form class="row">
                <div class="col-md-6 mx-auto">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullName" required />
                    </div>
                    <div class="mb-3">
                        <label for="nickName" class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" id="nickName" required />
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" required>
                            <option value="" selected disabled>Pilih</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="birthPlaceDate" class="form-label">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="birthPlaceDate"
                            placeholder="Contoh: Jakarta, 1 Januari 2024" required />
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-select" id="agama" required>
                            <option value="" selected disabled>Pilih</option>
                            <option value="islam">Islam</option>
                            <option value="kristen protestan">Kristen Protestan</option>
                            <option value="kristen katolik">Kristen Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anakKe" class="form-label">Anak ke-</label>
                        <input type="text" class="form-control" id="anakKe" required />
                    </div>
                    <div class="mb-3">
                        <label for="parentNameAyah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="parentNameAyah" required />
                    </div>
                    <div class="mb-3">
                        <label for="parentNameIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="parentNameIbu" required />
                    </div>
                    <div class="mb-3">
                        <label for="profesiayah" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="profesiayah" required />
                    </div>
                    <div class="mb-3">
                        <label for="profesiibu" class="form-label">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="profesiibu" required />
                    </div>
                    <div class="mb-3">
                        <label for="telayah" class="form-label">No. HP/WhatsApp</label>
                        <input type="text" class="form-control" id="telayah" required />
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Rumah</label>
                        <textarea class="form-control" id="address" rows="3" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- penutup pendaftaran -->
    <div class="back-to-top" id="backToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </div>
@endsection