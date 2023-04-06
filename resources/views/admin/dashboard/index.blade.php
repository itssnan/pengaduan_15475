@extends('admin.layouts.main')


@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->


        <div class="text-center rounded p-4">
            <div class="justify-content-between mb-4">
                <h1>Laporan Masuk</h1>
            </div>
            <section class="section dashboard">
                <div class="row">


                    <table class="table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Foto</th>
                                <th>Isi Laporan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $d['judul'] }}</td>
                                    <td>{{ $d['tempat'] }}</td>
                                    <td style="width:15%;">
                                        <img style='max-height:100px;max-width:100px'
                                            src="{{ asset('storage/' . $d->foto) }}">
                                    </td>
                                    <td>{{ $d['isi_laporan'] }}</td>
                                    <td>{{ $d['status'] }}</td>
                                    <td style="width:30%;">
                                        <a class="btn btn-sm btn-success" href="tanggapan/{{ $d['id'] }}">tanggapan</a>
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ url('dashboard/' . $d->id . '/edit') }}">verifikasi</a>
                                        {{-- @can('admin') --}}
                                            <a class="btn btn-sm btn-danger" href="cetak/{{ $d['id'] }}">Cetak
                                                Laporan</a>
                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </section>

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
