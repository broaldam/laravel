<!-- resources/views/reservations/index.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservasi Hotel A3') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Nomor Reservasi</th>
        <th>Telpon</th>
        <th>Action</th>
    </tr>
    @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>{{ $reservation->name }}</td>
            <td>{{ $reservation->email }}</td>
            <td>{{ $reservation->check_in }}</td>
            <td>{{ $reservation->check_out }}</td>
            <td>{{ $reservation->nomor }}</td>
            <td>{{ $reservation->telp }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('reservations.show', $reservation->id) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('reservations.destroy', $reservation->id) }}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

<a class="btn btn-success" href="{{ route('reservations.create') }}">Buat Reservasi Baru</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
