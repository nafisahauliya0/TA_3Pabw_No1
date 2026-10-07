<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; color: #333; }
        header, footer { background: #f4f4f4; padding: 10px; text-align: center; border: 1px solid #ccc; }
        nav a { margin: 0 10px; text-decoration: none; color: #000; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { margin: 20px 0; }
        .card { border: 1px solid #ccc; padding: 12px; margin: 10px 0; border-radius: 4px; background: #fafafa; }
        form div { margin-bottom: 10px; }
        label { display: block; margin-bottom: 3px; }
        input[type="text"], input[type="number"] { width: 100%; max-width: 300px; padding: 6px; }
        button { padding: 6px 12px; cursor: pointer; }
    </style>
</head>
<body>

    <header>
        <h1>Sistem Pelaporan Banjir (LaporBanjir)</h1>
        <nav>
            <a href="{{ route('lapor.index') }}">Daftar Laporan</a> 
            <a href="{{ route('lapor.create') }}">Buat Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung</p>
    </footer>

</body>
</html>