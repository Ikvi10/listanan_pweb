<html>
<head>
    <title>List Belanja</title>
    <link href="{{ asset('css/list.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    .table-width {
        width: 100%;
    }
</style>
  </head>
<body>
<nav class="navbar">
  <div class="navbar-inner">
    <div class="navbar-left">
    <img src="{{ asset('images/logo.png') }}" class="navbar-brand">
    </div>
    <div class="navbar-center">
      <form class="search-form">
        <input type="text" placeholder="Cari" class="search-input">
        <button type="submit" class="search-button">Search</button>
      </form>
    </div>
    <div class="navbar-right">
      <ul class="nav-links">
        <li><a href="{{ route('listbelanja') }}"><img src="{{ asset('images/troley.png') }}"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="content">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->gambar }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->deskripsi }}</td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('dashboard') }}" class="tb">Tambah</a>
</div>
<footer>
<div class="text-container">
<p class="textkiri">Total Produk:1</p>
<p class="textkanan">Total Harga:38.000</p>
  </div>
</footer>
</body>
</html>