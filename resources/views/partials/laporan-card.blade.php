<div class="card">
    <h3>Lokasi: {{ $laporan['lokasi'] }}</h3>
    <p><strong>Nama Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    
    <p><strong>Status:</strong> 
        @if($laporan['tinggi'] < 30)
            Waspada
        @elseif($laporan['tinggi'] >= 30 && $laporan['tinggi'] <= 70)
            Siaga
        @else
            Awas
        @endif
    </p>
</div>