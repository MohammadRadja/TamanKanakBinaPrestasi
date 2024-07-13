@extends('master.template')
@section('Judul', 'TKIT BINA PRESTASI - Beranda')
@section('content')

    <!-- Tampilan Home -->
    <div class="container-fluid">
        <div class="row vh-100" style="background-image: url('./asset/TK.jpg'); background-size: cover; background-position: center;">
            <div class="col-lg-12 d-flex align-items-center justify-content-center text-center text-white">
                <div>
                    <h4 class="display-4">SELAMAT DATANG DI TKIT BINA PRESTASI</h4>
                    <a href="{{ route('post.register') }}" id="btnDaftar" class="btn btn-primary mt-3">PENDAFTARAN SISWA BARU</a>
                </div>
            </div>
        </div>
    </div>


    <!-- deskripsi singkat -->
    <div class="history">
        <div class="container py-5" style="text-align: center">
            <h1>TKIT BINA PRESTASI</h1>
            <div class="" style="text-align: justify">
                <p>Taman Kanak-Kanak Islam Terpadu (TKIT) Bina Prestasi berdiri pada tahun 2014 yang berdiri di bawah
                    naungan Yayasan Insan Bina Prestasi yang dipimpinan oleh Tuty Munawaroh S.Pd.I.</p>
                <p>TKIT Bina Prestasi berkomitmen untuk memberikan pola pendidikan yang terbaik bagi anak-anak untuk
                    menyelenggarakan pendidikan yang berkesinambungan dan ramah anak. Kurikulum TKIT Bina Prestasi disusun
                    dengan mengusung nilai-nilai Islami sebagai dasar untuk mengembangkan karakter peserta didik.</p>
                <p>TKIT Bina Prestasi terbagi dalam kelompok PG (usia 3 tahun), Kelompok A (usia 4- 5 tahun) kelompok B
                    (usia 5-6 tahun). Proses pembelajaran berlangsung selama 5 kali dalam seminggu dengan menggunakan
                    pembelajaran sentra.</p>
            </div>
        </div>
    </div>
    <!-- penutup deskripsi singkat -->
    <!-- galeri -->
    <div class="beranda py-5">
        <div class="container text-center">
            <h1>GALERI</h1>
            <div class="owl-carousel owl-theme">
                <div><img src="./asset/Wisuda.jpg" class="w-100" /></div>
                <div><img src="./asset/Sekolah.jpg" class="w-100" /></div>
                <div><img src="./asset/Staff.jpg" class="w-100" /></div>
                <div><img src="./asset/Wisuda 2.jpg" class="w-100" /></div>
                <div><img src="./asset/Gambar 1.jpg" class="w-100" /></div>
                <div><img src="./asset/Gambar 2.jpg" class="w-100" /></div>
                <div><img src="./asset/Gambar 3.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoBersama.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoBersama2.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoBersama3.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoBersama4.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoBersama5.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoGuru.jpg" class="w-100" /></div>
                <div><img src="./asset/FotoGuru2.jpg" class="w-100" /></div>
                <div><img src="./asset/KamarMandi.jpg" class="w-100" /></div>
                <div><img src="./asset/Perpustakaan.jpg" class="w-100" /></div>
                <div><img src="./asset/RakSepatu.jpg" class="w-100" /></div>
                <div><img src="./asset/RuangGuru.jpg" class="w-100" /></div>
                <div><img src="./asset/RuangKantor.jpg" class="w-100" /></div>
                <div><img src="./asset/RuangTungguOrangTua.jpg" class="w-100" /></div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('video/Video 1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('video/Video 2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="ratio ratio-16x9">
                    <video controls>
                        <source src="{{ asset('video/Video 3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- penutup galeri -->
    <!-- biaya PPDB-->
    <section class="register-section py-5">
        <div class="container text-center">
            <h1>PPDB ONLINE 2024/2025</h1>
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h3>Uang Pendaftaran</h3>
                        <div class="icon-round">
                            <i class="fas fa-percent"></i>
                        </div>
                        <h5 class="text-decoration-line-through">Rp200.000</h5>
                        <h1>GRATIS</h1>
                        <p><s></s></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h3>Uang Pangkal</h3>
                        <div class="icon-round">
                            <i class="fas fa-percent"></i>
                        </div>
                        <h5 class="text-decoration-line-through">Rp600.000</h5>
                        <h1>GRATIS</h1>
                        <p><s></s></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h3>Uang Gedung</h3>
                        <div class="icon-round">
                            <i class="fas fa-percent"></i>
                        </div>
                        <h5 class="text-decoration-line-through">Rp500.000</h5>
                        <h1>GRATIS</h1>
                        <p><s></s></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- penutup biaya PPDB -->
    <!-- FAQ -->
    <div class="beranda py-5">
        <div class="container text-center">
            <h1>FREQUENTLY ASKED QUESTIONS</h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Bagaimana Cara Daftar ke TKIT Bina Prestasi?</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="text-start">
                                <li>Datang langsung ke Kantor TKIT Bina Prestasi</li>
                                <li>Daftar online <a href="{{ route('post.register') }}">Klik Disini</a></li>
                                <li>Info lebih lanjut mengenai PPDB hubungi admin <a href="http://wa.me/6285765549259">Klik
                                        Disini</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Kurikulum yang digunakan di TKIT Bina Prestasi</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">Kami mengimplementasikan Kurikulum Merdeka melalui
                            pembelajaran sentra seni, sentra bahasa, dan sentra imtak.
                            Dalam pembelajaran, TKIT Bina Prestasi menggunakan Sistem Sentra, yaitu:
                            <ul class="text-start">
                            <li>Sentra Bermain merupakan zona atau arena bermain anak yang dilengkapi dengan seperangkat alat bermain yang berfungsi sebagai pijakan lingkaran yang diperlukan untuk mengembangkan seluruh potensi dasar anak didik dalam berbagai aspek perkembangan secara seimbang.</li>
                            <li>Sentra Persiapan yang berfokus untuk memberikan kesempatan pada siswa untuk mengembangkan kemampuan matematika, pra menulis, dan pra membaca.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Fasilitas di TKIT Bina Prestasi</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            <li>Lokasi mudah dijangkau yang berada dalam perumahan dengan lingkungan yang nyaman, rindang, dan aman dari jalan raya.</li>
                            <li>Taman bermain yang luas di luar ruangan.</li>
                            <li>Permainan dalam ruangan.</li>
                            <li>Tempat tunggu untuk orangtua.</li>
                            <li>Ruang kelas yang menggunakan sentra, yaitu sentra balok, sentra musik, sentra sains, sentra imtaq, sentra bahan alam, sentra seni, dan sentra persiapan.</li>
                            <li>Ruang kantor.</li>
                            <li>Ruang guru.</li>
                            <li>Kamar mandi.</li>
                            <li>Wastafel.</li>
                            <li>Keran wudhu.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Program Kegiatan di TKIT Bina Prestasi</strong>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            <li>Kegiatan ekstrakurikuler setiap hari kamis cooking class, silat, menggambar, tari dan menyanyi.</li>
                            <li>Pemeriksaan kesehatan umum dan gigi dari Puskesmas.</li>
                            <li>Home visit kunjungan ke rumah peserta didik dengan tujuan melaporkan perkembangannya.</li>
                            <li>Cooking class kegiatan praktek memasak dengan berbagai menu yang di anak.</li>
                            <li>Praktek Manasik Haji.</li>
                            <li>Field trip, yaitu kunjungan tema atau pembelajaran di luar.</li>
                            <li>Gizi sehat yang diberikan sebulan sekali.</li>
                            <li>Praktek shalat dan praktek wudhu.</li>
                            <li>Kegiatan Infaq.</li>
                            <li>Literasi (membaca Iqra' atau buku cerita).</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Rincian Biaya TKIT Bina Prestasi</strong>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            <ul>
                                <li>Uang Pendaftaran <span class="float-end"><b>GRATIS</b></span></li>
                                <li>Uang Pangkal/Bangunan <span class="float-end"><b>GRATIS</b></span></li>
                                <li>Buku Pelajaran <span class="float-end"><b>Rp200.000</b></span></li>
                                <li>Seragam Sekolah 4 macam <span class="float-end"><b>Rp800.000</b></span></li>
                                <li>SPP Perbulan <span class="float-end"><b>Rp200.000</b></span></li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- penutup FAQ -->
    <div class="back-to-top" id="backToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </div>
@endsection
