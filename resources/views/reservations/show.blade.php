<!-- resources/views/reservations/show.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <tr>
                            <th>Nama:</th>
                            <td>{{ $reservation->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $reservation->email }}</td>
                        </tr>
                        <tr>
                            <th>Check-in:</th>
                            <td>{{ $reservation->check_in }}</td>
                        </tr>
                        <tr>
                            <th>Check-out:</th>
                            <td>{{ $reservation->check_out }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Reservasi:</th>
                            <td>{{ $reservation->nomor }}</td>
                        </tr>
                        <tr>
                            <th>Telpon:</th>
                            <td>{{ $reservation->telp }}</td>
                        </tr>    
                    </table>
                    
                    <a class="btn btn-primary" href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                    <a class="btn btn-secondary" href="{{ route('reservations.index') }}">Kembali ke Halaman Utama</a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


