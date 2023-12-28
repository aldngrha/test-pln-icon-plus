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
                    <div class="card-header">Buat Meeting Room Baru</div>
                    <div class="card-body">
                        <form action="{{ route('meetingRoom.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_unit">Nama Ruangan:</label>
                                <input type="text" class="form-control" id="room_name" name="room_name">
                            </div>
                            <div class="form-group">
                                <label for="unit_pln_id">Unit PLN</label>
                                <select name="unit_pln_id" required class="form-control">
                                    <option value="">Pilih Unit PLN</option>
                                    @foreach ($unitPLN as $unit)
                                        <option value="{{ $unit->id }}">
                                            {{ $unit->unit_pln_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_unit">Kapasitas Ruangan:</label>
                                <input type="number" class="form-control" id="capacity" name="capacity">
                            </div>
                            <!-- Tambahkan input untuk atribut lain jika diperlukan -->
                            <button type="submit" class="btn btn-primary">Buat Meeting Room</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
