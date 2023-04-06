@extends('home.layouts.main')

@section('container')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Pengaduan Masyarakat</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Laporkan segala keluhanmu disini. Jangan banyak mengeluh
                        karna mengeluh itu tidak baik</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            @if (auth()->guard('masyarakat')->check())
                                <a href="/lapor"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Lapor</span>
                            @endif

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/pengaduan.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Pelajari cara membuat laporan yang baik</h2>
                            <a href="https://sarjanaekonomi.co.id/cara-membuat-laporan/">Perhatikan Cara Menyampaikan
                                Pengaduan Yang Baik dan Benar</a>
                            <i class="fa fa-squere-question"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/abc.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="values" class="values">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Tahapan Dalam Melapor</p>
                </header>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <h3>1. Tulis Laporan Anda</h3>
                            <p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <h3>2. Proses verifikasi</h3>
                            <p>Secepatnya laporan Anda akan diverifikasi dan diteruskan kepada
                                instansi berwenang</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <h3>3. Proses Tindak Lanjut</h3>
                            <p>Secepatnya instansi akan menindaki dan membalas laporan anda</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <h3>4. Selesai</h3>
                            <p>Laporan anda telah selesai diproses</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
