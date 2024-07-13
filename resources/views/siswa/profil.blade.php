@extends('master.template')
@section('Judul', 'TKIT BINA PRESTASI - Tentang Kami')
@section('content')
     <!-- Sambutan -->
<div class="container-fluid beranda pt-2 menu">
    <div class="container">
            <div class="row">
                    <div class="card border-0">
                        <div class="card-body">
                            <h2 class="card-title">SAMBUTAN KETUA YAYASAN</h2>
                           <figure class="figure float-end mb-4">
                                <img src="./asset/Tuty Munawaroh.jpg" alt="Tuty Munawaroh" class="figure-img img-fluid rounded shadow" style="max-width: 300px;">
                                <!-- <figcaption class="figure-caption mt-2 text-center">Tuty Munawaroh, S.Pd.I.</figcaption> -->
                            </figure>
                            <p class="card-text">Assalamu'alaikum warahmatullahi wa barakatuh</p>
                            <p class="card-text">Segala puji marilah kita panjatkan kehadirat Allah SWT bahwa atas berkah-Nya kita senantiasa mendapat limpahan rahmat dan keridoan-Nya sehingga Yayasan Insan Bina Prestasi terus berkembang maju dan memberi kontribusi bagi masyarakat dan dunia pendidikan. Sholawat teriring salam semoga tercurahkan kepada junjungan Nabi Muhammad SAW, beserta keluarga, pada sahabat dan pengikutnya hingga akhir zaman. Aamiin Ya Robbal Aalamiin.</p>
                            <p class="card-text">Ucapan terima kasih kami sampaikan kepada para orang tua siswa yang telah mempercayakan pendidikan putera/puterinya di sekolah TKIT Bina Prestasi. Keputusan memilih sekolah TKIT Bina Prestasi sebagai sarana untuk bersosialisasi bermain bersama sahabat, belajar membaca dan menulis serta mengembangkan segala potensi ananda tercinta sudah sangat tepat, karena sekolah TKIT Bina Prestasi senantiasa meningkatkan komitmennya dalam mutu pelayanan pendidikan kepada peserta didik dan meningkatkan mutu lulusannya.</p>
                            <p class="card-text">Yayasan Insan Bina Prestasi terus melakukan inovasi dan kerjasama dengan seluruh pihak terkait di bidang pendidikan, kesehatan dan keagamaan serta seluruh pihak lainnya yang secara langsung atau tidak langsung dapat meningkatkan pelayanan, pertumbuhan dan kualitas Sekolah TKIT Bina Prestasi.</p>
                            <p class="card-text">Akhirnya hanya kepada Allah SWT kita berharap semoga semuanya diberikan kekuatan untuk mencapai cita-cita yang mulia, membentuk dan melahirkan insan kamil di Sekolah TKIT Bina Prestasi tercinta ini. Aamiin ya Robbal Aalamiin.</p>
                            <p class="card-text">Wassalamu'alaikum warohmatullahi wabarokatuh</p>
                            <p class="text-end fw-bold mb-5">Tuty Munawaroh, S.Pd.I.</p>
                            <p class="text-end">Ketua Yayasan Insan Bina Prestasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Penutup Sambutan -->


    <!-- visi misi tujuan -->
    <div class="beranda pt-3">
        <div class="container" style="text-align: justify">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>VISI</h1>
                    <p>Mempersiapkan anak yang cerdas, mandiri, cinta kepada Allah SWT dan Rasulnya, serta berakhlakul karimah</p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">MISI</h1>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Menghasilkan lulusan yang taat kepada Allah SWT dan Rasulnya</li>
                        <li>Menghasilkan anak yang mempunyai dasar-dasar IPTEK & IMPTAQ, seni dan keterampilan</li>
                        <li>Melatih anak dalam menghafal surat-surat pendek Al-Qur'an sesuai perkembangan usia</li>
                        <li>Membekali anak didik dengan berbagai kemampuan sesuai dengan karakteristik anak usia dini</li>
                        <li>Menanamkan nilai-nilai keagamaan dan ketaqwaan terhadap Tuhan Yang Maha Esa</li>
                        <li>Memberdayakan potensi kecerdasan intelektual, kecerdasan emosi, kecerdasan sosial, dan kecerdasan religius anak didik</li>
                        <li>Membekali anak dalam hal budi pekerti luhur dan terpuji sesuai dengan nilai-nilai luhur Bangsa Indonesia</li>
                        <li>Mempersiapkan anak memasuki jenjang pendidikan dasar yang lebih matang dan berkualitas</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">TUJUAN</h1>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Membantu pemerintah dalam mendorong kesadaran masyarakat akan pentingnya Pendidikan Anak Usia Dini (PAUD)</li>
                        <li>Menyediakan sarana belajar sambil bermain bagi anak usia dini di wilayah Mutiara Pluit, Kecamatan Periuk, Kota Tangerang</li>
                        <li>Meningkatkan layanan pendidikan terhadap anak usia dini sesuai tahap perkembangannya</li>
                        <li>Membina lingkungan lembaga PAUD yang mendukung terciptanya satuan PAUD sebagai tempat pembelajaran yang kondusif</li>
                        <li>Membina kultur lembaga PAUD yang mendukung terciptanya warga lembaga PAUD yang mempunyai dedikasi dan etos kerja yang tinggi</li>
                        <li>Meningkatnya kualitas sarana prasarana untuk menunjang proses pembelajaran</li>
                        <li>Membina kerjasama yang harmonis dengan stake-holder terkait guna meningkatkan optimalisasi layanan PAUD</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- penutup visi misi tujuan -->

    <!-- sejarah singkat -->
    <div class="history">
        <div class="container py-5" style="text-align: center">
            <h1>SEJARAH SINGKAT</h1>
            <div class="container py-5" style="text-align: justify">
                <p>
                    Pendidikan Anak Usia Dini / Taman Kanak-kanak adalah suatu lembaga pembinaan yang ditujukan kepada anak usia 4-6 tahun dengan memberikan rangsangan (stimulus) pendidikan untuk membantu pertumbuhan perkembangan jasmani dan rohani anak agar dapat memiliki kesiapan dalam memasuki Pendidikan Dasar.
                </p>
                <p>Pada tahun 2013-2014 kami mengawali aktivitas pembinaan dengan membuka suatu lembaga pengajaran perumahan Mutiara Pluit maupun di luar perumahan Mutiara Pluit.</p>
                <p>
                    Dengan bernaung di bawah Yayasan Insan Bina Prestasi dan didirikan berdasarkan Akta Pendirian dengan Nomor: 41 tanggal 26 Oktober 2013 yang dikeluarkan oleh notaris H. Iswan di Azwar, SH, MKn SK. Menteri Kehakiman dan Hak Asasi Manusia Republik Indonesia Nomor: C-1059HT.03.01-Th.2002 Tanggal 16 Agustus 2002 yang beralamat Kantor di Jl. Raya Kuta bumi, Komplek Ruko Pondok Rejeki Blok CR-5 No. 20 Pasar Kemis - Tangerang 15562.
                </p>
            </div>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="text-center">
        <h1 class="mb-4">STRUKTUR ORGANISASI</h1>
        <img src="{{ asset('asset/Struktur Organisasi TKIT Bina Prestasi.jpg') }}" class="img-fluid" alt="Struktur Organisasi" />
    </div>
            <!-- penutup sejarah singkat -->
            <div class="back-to-top" id="backToTopBtn" title="Go to top">
                <i class="fas fa-arrow-up"></i>
            </div>
            <button id="backToTopBtn" title="Go to top">Top</button>
        @endsection

        <style>
    .beranda h1 {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .beranda p, .beranda ul {
        margin-bottom: 20px;
        font-size: 1.1em;
        line-height: 1.5;
    }

    .beranda ul {
        padding-left: 20px;
    }

    .beranda ul li {
        margin-bottom: 10px;
    }

    .history p {
        font-size: 1.1em;
        line-height: 1.5;
    }

    .text-center img {
        max-width: 100%;
        height: auto;
    }

    .back-to-top {
        background-color: #333;
        color: white;
        padding: 10px 15px;
        border-radius: 50%;
        cursor: pointer;
    }

    .back-to-top:hover {
        background-color: #555;
    }
</style>