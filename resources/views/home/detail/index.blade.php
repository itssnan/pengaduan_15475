<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cepu | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/adu.png" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="/abc/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/abc/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/abc/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/abc/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/abc/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/abc/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="abc/css/style.css" rel="stylesheet">

</head>

<body>



    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page">Detail Laporan</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 ">
                    <div class="card ">
                        <div class="row ">
                            <div class="col-md-6">
                                @if ($pengaduan->foto)
                                    <div class="images p-3">
                                        <div class="text-center p-4"> <img id="main-image"
                                                src="{{ asset('storage/' . $pengaduan->foto) }}" width="100%" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="judul">judul</label>
                                <input type="text" name="text" class="form-control rounded-top" id="judul"
                                    placeholder="judul" required value="{{ $pengaduan->judul }}" disabled>
                            </div>
                            <div class="col-12">
                                <label for="judul">Tanggal Kirim</label>
                                <input type="text" name="text" class="form-control rounded-top" id="judul"
                                    placeholder="judul" required value="{{ $pengaduan->created_at }}" disabled>
                            </div>
                            <div class="col-12">
                                <label for="judul">Status</label>
                                <input type="text" name="text" class="form-control rounded-top" id="judul"
                                    placeholder="judul" required value="{{ $pengaduan->status }}" disabled>
                            </div>
                            <div class="col-12">
                                <label for="isi_laporan">Isi Laporan</label>
                                <input type="text" name="isi_laporan" class="form-control rounded-top "
                                    id="isi_laporan" placeholder="isi_laporan" required
                                    value="{{ $pengaduan->isi_laporan }}" disabled>

                            </div>
                            @foreach ($tanggapans as $t)
                                <div class="col-12">
                                    <label for="isi_laporan">Tanggapan</label>
                                    <input type="text" name="isi_laporan" class="form-control rounded-top "
                                        id="isi_laporan" placeholder="isi_laporan" required value="{{ $t->tanggapan }}"
                                        disabled>
                                </div>
                            @endforeach

                            <a href="{{ url('laporan') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .card {
                border: none;
            }

            .card:hover {
                transform: scale(1.05);
                top: -10px;
                box-shadow: 0 10px 20px rgba(20, 14, 14, 0.12), 0 4px 8px rgba(0, 0, 0, .06);
            }

            .kolom {
                background-color: #eee
            }

            .brand {
                font-size: 13px
            }

            .lokasi {
                color: red;
                font-weight: 700;
            }

            .about {
                font-size: 14px;
            }

            .btn {
                margin-top: 10px;
            }

            .cart i {
                margin-right: 10px
            }
        </style>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <script src="/abc/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="/abc/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/abc/vendor/chart.js/chart.umd.js"></script>
        <script src="/abc/vendor/echarts/echarts.min.js"></script>
        <script src="/abc/vendor/quill/quill.min.js"></script>
        <script src="/abc/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="/abc/vendor/tinymce/tinymce.min.js"></script>
        <script src="/abc/vendor/php-email-form/validate.js"></script>
        <script src="/abc/js/main.js"></script>

</body>

</html>
