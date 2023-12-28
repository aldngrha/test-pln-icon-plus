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
                    <div class="card-header d-flex justify-content-between align-content-center">
                        <p>Meeting Room</p>
                        <a href="{{ route("meetingRoom.create") }}" class="btn btn-primary">Tambah Ruangan Meeting</a></div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Unit PLN</th>
                                <th scope="col">Kapasitas</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->room_name }}</td>
                                    <td>{{ $item->unit_pln->unit_pln_name }}</td>
                                    <td>{{ $item->capacity }}</td>
                                    <td>
                                        <a href="{{ route('meetingRoom.edit', $item->id) }}" class="btn btn-warning">
                                            <i class="fa fa-pencil-alt"></i>Edit
                                        </a>
                                        <form action="{{ route('meetingRoom.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data kosong</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
