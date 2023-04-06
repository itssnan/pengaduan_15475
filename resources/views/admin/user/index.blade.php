@extends('admin.layouts.main')


@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User</h1>

        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="createuser" class="btn btn-primary me-md-2" type="button">Tambah User</a>
                </div>
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                    </div>
                </div><!-- End Left side columns -->


                <table class="table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['email'] }}</td>
                                <td>{{ $d['nik'] }}</td>
                                <td>{{ $d['role'] }}</td>

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
