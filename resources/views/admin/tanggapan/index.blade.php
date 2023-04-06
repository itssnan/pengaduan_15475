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
    <div class="row">
        <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-body  ">
                @if ($pengaduan->foto)
                    <img style='max-height:100%;max-width:100%;' src="{{ asset('storage/' . $pengaduan->foto) }}">
                @endif
                <h5 class="fw-bold text-danger">Tanggal Masuk : {{ $pengaduan->created_at }}</h5>
                <h5 clss="fw-bold">Lokasi : {{ $pengaduan->tempat }}</h5>
                <p class="fw-bold ">Isi Laporan : {!! $pengaduan->isi_laporan !!}</p>
            </div>



            <div class="form-body">
                <form action="" method="POST">
                    @csrf
                    <input type="" name="pengaduan_id" value="{{ $pengaduan->id }}" hidden>
                    <textarea name="tanggapan" class="form-control" id="tanggapan" rows='4' placeholder="+ tanggapan">
      </textarea>
                    <input type="submit" class="btn btn-primary" value="kirim">
                    <style>
                        .btn {
                            margin-top: 10px;
                        }
                    </style>
                </form>
            </div>




            <h1 class="fw-bold text-primary" style="margin:50px; ">tanggapan </h1>
            {{-- @foreach ($tanggapans as $tanggapan)
            <div style="margin-bottom:20px;" class="card">
                <div class="card-body">
                    <div class="d-flex flex-start">
                        <h6 class="fw-bold text-primary">{{ $tanggapan->user->name }} say '{{ $tanggapan->tanggapan }}'
                        </h6>
                        <br>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-start">{{ $tanggapan->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach --}}
            <a href="{{ url('dashboard') }}">Kembali</a>

            <div class="card-footer">
                <h5 class="text-muted">Status : {{ $pengaduan->status }}</h5>
            </div>
        </div>

    </div>

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
