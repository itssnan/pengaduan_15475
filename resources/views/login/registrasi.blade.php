@extends('login.layouts.main')

@section('container')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/adu.png" alt="">
                                    <span class="d-none d-lg-block">Cepu</span>
                                </a>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    </div>
                                    <form action="/registrasi" method="POST" class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="name">Name</label>
                                            <input type="text" name="name"
                                                class="form-control rounded-top @error('name') is-invalid @enderror"
                                                id="name" placeholder="name" required value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="nik">NIK</label>
                                            <input type="text" name="nik"
                                                class="form-control rounded-top @error('nik') is-invalid @enderror"
                                                id="nik" placeholder="nik" required value="{{ old('nik') }}">
                                            @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="email">Email address</label>
                                            <input type="email" name="email"
                                                class="form-control rounded-top @error('email') is-invalid @enderror"
                                                id="email" placeholder="email" required value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="no_telp">No telp</label>
                                            <input type="text" name="no_telp"
                                                class="form-control rounded-top @error('no_telp') is-invalid @enderror"
                                                id="no_telp" placeholder="no_telp" required value="{{ old('no_telp') }}">
                                            @error('no_telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="password">Password</label>
                                            <input type="password" name="password"
                                                class="form-control rounded-top @error('password') is-invalid @enderror"
                                                id="password" placeholder="Password" required
                                                value="{{ old('password') }}">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
