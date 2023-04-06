<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cepu | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/adu.png" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="/assets/abc/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/abc/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/abc/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/abc/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/abc/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/abc/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/abc/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="abc/css/style.css" rel="stylesheet">

</head>

<body>

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')


    @yield('container')

    @include('admin.layouts.footer')

    <script src="/assets/abc/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/abc/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/abc/vendor/chart.js/chart.umd.js"></script>
    <script src="/assets/abc/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/abc/vendor/quill/quill.min.js"></script>
    <script src="/assets/abc/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/abc/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/abc/vendor/php-email-form/validate.js"></script>
    <script src="/assets/abc/js/main.js"></script>

</body>

</html>
