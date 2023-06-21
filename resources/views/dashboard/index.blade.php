<!-- resources/views/dashboard/index.blade.php -->
<html>
<head>
    <title>Dashboard</title>
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    
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

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/cros.png') }}" class="d-block w-100" alt="gambar1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/navbar.png') }}" class="d-block w-100" alt="gambar2">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <div class="Container">
<h3>Disarankan Untuk Anda<h3>

<div class="card-container">
@foreach($item as $item)
        
        <div class="card">
        <div class="card-content">
        <img src="{{ asset('images/'.$item->gambar) }}" alt="Gambar Item">
            <h2>{{ $item->judul }}</h2>
            <p>{{ $item->deskripsi }}</p>
            <div class="quantity">
        <button class="btn-decrease" id="btn-decncrease-1">-</button>
        <span class="count" id="count-1">0</span>
        <a href="{{ route('halinfo') }}"><button class="btn-increase" id="btn-increase-1">+</button></a>
      </div>
      </div>
      </div>
    @endforeach
    </div>
</div>
</body>
</html>
