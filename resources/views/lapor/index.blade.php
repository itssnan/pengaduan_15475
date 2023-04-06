@extends('home.layouts.main')

@section('container')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class=" flex-column justify-content-center">
                    <h1>Sampaikan Laporan Anda</h1>
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Form Pengaduan</h4>
                        </div>
                        <form method="post" action="/lapor" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <select type="text" name="user_id" id="user_id" class="form-control" hidden>
                                    <option> {{ auth()->guard('masyarakat')->user()->id }}</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="judul">Judul Laporan</label>
                                <input type="text" name="judul"
                                    class="form-control rounded-top @error('judul') is-invalid @enderror" id="judul"
                                    placeholder="Masukan judul" required value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tempat">Tempat</label>
                                <input type="text" name="tempat"
                                    class="form-control rounded-top @error('tempat') is-invalid @enderror" id="tempat"
                                    placeholder="Tempat Kejadian" required value="{{ old('tempat') }}">
                                @error('tempat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto"
                                    class="form-control form-control-lg
                                @error('foto') is-invalid @enderror"
                                    id="foto" required value="{{ old('foto') }}">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="isi_laporan">Isi Laporan</label>
                                <textarea type="text" class="form-control @error('isi_laporan') is-invalid @enderror" id="isi_laporan"
                                    name="isi_laporan" rows="3" required value="{{ old('isi_laporan') }}"></textarea>
                                @error('isi_laporan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </section>
@endsection
