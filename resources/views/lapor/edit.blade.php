<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cepu | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/adu.png" rel="icon">

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
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Verifikasi</h1>
        </div>
        <section class="section dashboard">
            <div class="row">


                <div class="col-lg-8">
                    <div class="row">

                    </div>
                </div>
                <form action="{{ url('dashboard/' . $data->id) }}" method='post'>
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="judul">judul</label>
                        <input type="text" name="text"
                            class="form-control rounded-top @error('judul') is-invalid @enderror" id="judul"
                            placeholder="judul" required value="{{ old('judul', $data->judul) }}" disabled>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="tempat">Tempat</label>
                        <input type="text" name="tempat"
                            class="form-control rounded-top @error('tempat') is-invalid @enderror" id="tempat"
                            placeholder="tempat" required value="{{ old('tempat', $data->tempat) }}" disabled>
                        @error('tempat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="foto" class="form-label">Foto</label>
                        <img src="{{ asset('storage/' . $data->foto) }}"
                            class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    </div>
                    <div class="col-12">
                        <label for="isi_laporan">Isi Laporan</label>
                        <input type="text" name="isi_laporan"
                            class="form-control rounded-top @error('isi_laporan') is-invalid @enderror" id="isi_laporan"
                            placeholder="isi_laporan" required value="{{ old('isi_laporan', $data->isi_laporan) }}"
                            disabled>
                        @error('isi_laporan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Edit</button>
                    </div>
                    <div class="col-12">
                        <a href="">Kembali</a>
                    </div>
                </form>
            </div>
        </section>

    </main>




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
