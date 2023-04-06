@extends('admin.layouts.main')


@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tambah User</h1>

        </div>

        <section class="section dashboard">
            <div class="row">


                <div class="col-lg-8">
                    <div class="row">

                    </div>
                </div>
                <form action="/createuser" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="name">Name</label>
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik"
                            class="form-control rounded-top @error('nik') is-invalid @enderror" id="nik"
                            placeholder="nik" required value="{{ old('nik') }}">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="email">Email address</label>
                        <input type="email" name="email"
                            class="form-control rounded-top @error('email') is-invalid @enderror" id="email"
                            placeholder="email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="no_telp">No telp</label>
                        <input type="text" name="no_telp"
                            class="form-control rounded-top @error('no_telp') is-invalid @enderror" id="no_telp"
                            placeholder="no_telp" required value="{{ old('no_telp') }}">
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" name="password"
                            class="form-control rounded-top @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-lable">Role</label>
                        <select class="form-select" name="role">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                        <a href="user">Kembali</a>
                    </div>
                </form>
            </div>
        </section>

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
