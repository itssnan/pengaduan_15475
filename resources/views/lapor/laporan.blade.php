@extends('home.layouts.main')

@section('container')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="text-center rounded p-4">
                <div class="justify-content-between mb-4">
                    <h1>Laporan Saya</h1>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0 text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>judul laporan</th>
                                <th>Tempat</th>
                                <th>Foto</th>
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
                                    {{-- @foreach ($tanggapan as $t)
                                        <td>{{ $t['tanggapan'] }}</td>
                                    @endforeach --}}

                                    <td style="width:30%;">
                                        {{-- <a class="btn btn-sm btn-success" href="">tanggapan</a> --}}
                                        <a class="btn btn-sm btn-danger" href="delete/{{ $d['id'] }}">Hapus</a>
                                        <a class="btn btn-sm btn-warning" href="detail/{{ $d['id'] }}">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
