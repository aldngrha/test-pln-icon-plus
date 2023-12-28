@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Test PLN ICON Plus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Unit PLN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Meeting Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order Management</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Tabel untuk menampilkan data Unit PLN -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ubah Unit PLN {{ $unitPln->unit_pln_name }}</div>
                    <div class="card-body">
                        <form action="{{ route('unitPln.update', $unitPln->id) }}" method="POST">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="nama_unit">Nama Unit:</label>
                                <input type="text" class="form-control" id="unit_pln_name" name="unit_pln_name" value="{{ $unitPln->unit_pln_name }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_unit">Alamat Unit:</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $unitPln->address }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_unit">Jumlah Ruangan:</label>
                                <input type="number" class="form-control" id="number_of_rooms" name="number_of_rooms" value="{{ $unitPln->number_of_rooms }}">
                            </div>
                            <!-- Tambahkan input untuk atribut lain jika diperlukan -->
                            <button type="submit" class="btn btn-primary">Ubah Unit PLN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
