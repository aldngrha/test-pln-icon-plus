@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Test PLN ICON Plus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{ route("logout") }}" class="text-white mr-4">Logout</a>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
{{--                    <form action="" method="POST">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="ruang_meeting_id">Ruang Meeting:</label>--}}
{{--                            <select class="form-control" id="meeting_room_id" name="ruang_meeting_id">--}}
{{--                                <!-- Populate with available meeting rooms -->--}}
{{--                                @foreach ($ruangMeetings as $ruangMeeting)--}}
{{--                                    <option value="{{ $ruangMeeting->id }}">{{ $ruangMeeting->room_name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="meeting_date">Tanggal Meeting:</label>--}}
{{--                            <input type="date" class="form-control" id="meeting_date" name="meeting_date">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="start_time">Waktu Mulai Meeting:</label>--}}
{{--                            <input type="time" class="form-control" id="start_time" name="start_time">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="end_time">Waktu Berakhir Meeting:</label>--}}
{{--                            <input type="time" class="form-control" id="end_time" name="end_time">--}}
{{--                        </div>--}}
{{--                        <!-- Tambahkan input untuk atribut lain jika diperlukan -->--}}
{{--                        <button type="submit" class="btn btn-primary">Buat Order Meeting</button>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
