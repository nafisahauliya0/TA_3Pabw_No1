@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Kejadian Banjir</h2>

    @forelse($laporanList as $laporan)
        {{-- Menggunakan Partial laporan-card dengan @include --}}
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection
