@extends('master.template')
@section('Judul', 'TKIT BINA PRESTASI - Program')
@section('content')
    <div class="container py-5 menu">
        <h1 class="text-center">EKSTRAKURIKULER DAN PROGRAM</h1>
        <div class="row pt-4 gx-4 gy-4">

        <!-- Program 1 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-fist-raised fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Silat</h5>
                    <p class="card-text">
                        Mendorong anak-anak untuk bergerak aktif dan meningkatkan
                        kesehatan fisik mereka.
                    </p>
                </div>
            </div>
        </div>
        <!-- Program 2 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-paint-brush fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Melukis</h5>
                    <p class="card-text">
                        Mengembangkan kreativitas anak-anak melalui kegiatan melukis dan
                        menggambar.
                    </p>
                </div>
            </div>
        </div>
        <!-- Program 3 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-music fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Menyanyi</h5>
                    <p class="card-text">
                        Mengenalkan anak-anak pada dunia musik melalui menyanyi dan
                        bermain alat musik sederhana.
                    </p>
                </div>
            </div>
        </div>
        <!-- Program 4 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-desktop fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Komputer</h5>
                    <p class="card-text">
                        Membantu anak-anak dalam belajar teknologi komputer dasar.
                    </p>
                </div>
            </div>
        </div>
        <!-- Program 5 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-quran fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Tahfidz</h5>
                    <p class="card-text">
                        Menghafal Al-Quran untuk meningkatkan pemahaman dan hafalan anak-anak.
                    </p>
                </div>
            </div>
        </div>
        <!-- Program 6 -->
        <div class="col-md-4">
            <div class="card crop-img">
                <br>
                <i class="fas fa-kaaba fa-5x text-primary mb-3 text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Manasik Haji</h5>
                    <p class="card-text">
                        Mengajarkan anak-anak tentang ibadah Haji melalui praktek manasik.
                    </p>
                </div>
            </div>
        </div>
     </div>
   </div>
    <!-- penutup program -->
    <!-- FASILITAS-->
    <div class="container py-5">
    <h1 class="text-center mb-5">FASILITAS</h1>
    <div class="row gy-5">
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/Taman Bermain.jpg" alt="Taman Bermain" />
                <div class="card-body text-center">
                    <h5 class="card-title">Taman Bermain</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/Keran Air.jpg" alt="Keran Air" />
                <div class="card-body text-center">
                    <h5 class="card-title">Keran Air</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/Pos.jpg" alt="Tempat Menunggu" />
                <div class="card-body text-center">
                    <h5 class="card-title">Tempat Menunggu</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/pos.jpg" alt="Ruang Kantor" />
                <div class="card-body text-center">
                    <h5 class="card-title">Ruang Kantor</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/pos.jpg" alt="Toilet" />
                <div class="card-body text-center">
                    <h5 class="card-title">Toilet</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="./asset/pos.jpg" alt="Ruang Kelas" />
                <div class="card-body text-center">
                    <h5 class="card-title">Ruang Kelas</h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="back-to-top" id="backToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </div>
@endsection

<style>
.container h1 {
    font-family: "Algerian";
    font-weight: 500;
    line-height: 1.2;
    color: black;
    font-size: calc(1.375rem + 1.5vw);
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card img {
    border-radius: 0;
}

.card-title {
    font-weight: bold;
    margin-top: 10px;
}


.card-body {
    padding: 1rem;
    background-color: #f8f9fa;
}

</style>