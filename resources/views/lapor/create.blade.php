@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Lapor Banjir</h2>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" required>
        </div>
        <div>
            <label>Lokasi Kejadian:</label>
            <input type="text" name="lokasi" required>
        </div>
        <div>
            <label>Tinggi Genangan (cm):</label>
            <input type="number" name="tinggi" required>
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection