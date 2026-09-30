<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

    <h1>DATA BUKU</h1>

    <a href="{{ route('admin.buku.create') }}">
        Tambah Buku
    </a>

    <hr>

    @forelse ($bukus as $buku)

        <p>
            {{ $buku->kode_buku }}
            -
            {{ $buku->judul }}
            -
            {{ $buku->pengarang }}
            -
            {{ $buku->penerbit }}
            -
            {{ $buku->stok }}
        </p>

    @empty

        <h2>Belum ada data buku.</h2>

    @endforelse

</body>
</html>