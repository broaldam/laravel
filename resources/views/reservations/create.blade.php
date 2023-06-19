<!-- resources/views/reservations/create.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error Bang!</strong> Ada Masalah dengan Input Datanya.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('reservations.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="check_in">Check-in:</label>
        <input type="date" class="form-control" id="check_in" name="check_in" required>
    </div>

    <div class="form-group">
        <label for="check_out">Check-out:</label>
        <input type="date" class="form-control" id="check_out" name="check_out" required>
    </div>

    <div class="form-group">
        <label for="nomor">Nomor Reservasi:</label>
        <input type="text" class="form-control" id="nomor" name="nomor" required>
    </div>
    
    <div class="form-group">
        <label for="telp">Telpon:</label>
        <input type="text" class="form-control" id="telp" name="telp" required>
    </div>

    <button type="submit" class="btn btn-outline-primary">Buat Data</button>
    <a class="btn btn-outline-secondary" href="{{ route('reservations.index') }}">Kembali ke Halaman Utama</a>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

