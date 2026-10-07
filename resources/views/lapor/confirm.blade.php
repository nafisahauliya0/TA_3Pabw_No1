@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="sukses" message="Laporan Anda berhasil dikirim!" />

    <div class="card">
        <h3>Detail Laporan yang Dikirim:</h3>
        <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>
    </div>

    <a href="{{ route('lapor.index') }}">Kembali ke Daftar Laporan</a>
@endsection