@extends('master.template')
@section('Judul', 'TKIT BINA PRESTASI - Kontak')
@section('content')


<!-- Contact Information -->
<div class="container py-5 menu">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-4">KONTAK KAMI</h1>
            <ul class="list-unstyled-kontak">
                <p><i class="fas fa-envelope me-2"></i>Email: <a href="mailto:tkitbinaprestasi@gmail.com">tkitbinaprestasi@gmail.com</a></p>
                <p><i class="fas fa-phone me-2"></i>Telepon: <a href="tel:+6285765549259">+62 857-6554-9259</a></p>
                <p><i class="fas fa-map-marker-alt me-2"></i>Alamat: <a href="https://maps.app.goo.gl/n2S7fMC76V5HtWrY6">Villa Mutiara Pluit Blok F3 No. 43, RT 007, RW 009, Kel. Periuk, Kec. Periuk, Kota Tangerang, Banten 15131</a></p>
            </ul>
            <div class="social-icons mt-3">
                <a href="https://www.facebook.com/tkitbinaprestasi" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/tkitbinaprestasi" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/tkitbinaprestasi" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="mailto:tkitbinaprestasi@gmail.com" target="_blank" title="Email"><i class="fas fa-envelope"></i></a>
                <a href="http://wa.me/6285765549259" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="col-md-6 mt-5">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126916.86337892224!2d106.45518198216801!3d-6.243692790247523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff4420ebe04f%3A0x61aa392b92b6c047!2sTK%20BINA%20PRESTASI%20(ISLAM%20TERPADU)!5e0!3m2!1sid!2sid!4v1720557584165!5m2!1sid!2sid" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>

    </div>
</div>
<!-- End Contact Information -->

<!-- FAQ Section -->
<div class="container">
    <h1 class="text-center mb-5">FREQUENTLY ASKED QUESTIONS</h1>
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
                        <li>Sentra Bermain merupakan zona atau arena bermain anak yang dilengkapi dengan seperangkat alat
                            bermain yang berfungsi sebagai pijakan lingkaran yang diperlukan untuk mengembangkan seluruh
                            potensi dasar anak didik dalam berbagai aspek perkembangan secara seimbang.</li>
                        <li>Sentra Persiapan yang berfokus untuk memberikan kesempatan pada siswa untuk mengembangkan
                            kemampuan matematika, pra menulis, dan pra membaca.</li>
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
                    <ul>
                        <li>Lokasi mudah dijangkau yang berada dalam perumahan dengan lingkungan yang nyaman, rindang, dan
                            aman dari jalan raya.</li>
                        <li>Taman bermain yang luas di luar ruangan.</li>
                        <li>Permainan dalam ruangan.</li>
                        <li>Tempat tunggu untuk orangtua.</li>
                        <li>Ruang kelas yang menggunakan sentra, yaitu sentra balok, sentra musik, sentra sains, sentra
                            imtaq, sentra bahan alam, sentra seni, dan sentra persiapan.</li>
                        <li>Ruang kantor.</li>
                        <li>Ruang guru.</li>
                        <li>Kamar mandi.</li>
                        <li>Wastafel.</li>
                        <li>Keran wudhu.</li>
                    </ul>
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
                    <ul>
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
                    </ul>
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
    </div>
</div>
<!-- End FAQ Section -->

<!-- Back to Top Button -->
<div class="back-to-top" id="backToTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</div>
<!-- End Back to Top Button -->

@endsection