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
        <button class="btn-increase" id="btn-increase-1">+</button>
      </div>
      </div>
      </div>
    @endforeach
    </div>
<!-- <div class="card-container">
  <div class="card">
    <img src="{{ asset('images/bamer.png') }}" alt="Gambar 1" class="card-image">
    <div class="card-content">
      <p>Bawang merah </p>
      <p>38.000/kg</p>
      <div class="quantity">
        <button class="btn-decrease" id="btn-decncrease-1">-</button>
        <span class="count" id="count-1">0</span>
        <button class="btn-increase" id="btn-increase-1">+</button>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('images/telur.png') }}" alt="Gambar 2" class="card-image">
    <div class="card-content">
      <p>Telur</p>
      <p>Rp 1.800/butir</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count" id="count-2">0</span>
        <button class="btn-increase"  id="btn-increase-2">+</button>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('images/minyak.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Minyak Goreng</p>
      <p>Rp 15.000/liter</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>

  </div>
  <div class="card">
    <img src="{{ asset('images/cabe.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Cabai Merah</p>
      <p>Rp 18.000/kg</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>
    
  </div>
  <div class="card">
    <img src="{{ asset('images/ayam.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Daging Ayam Broiler</p>
      <p>Rp 38.000/kg</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>
  </div>

  <div class="card">
    <img src="{{ asset('images/baput.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Bawang Putih</p>
      <p>Rp 33.500/kg</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>
  </div>

  <div class="card">
    <img src="{{ asset('images/gula.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Gula</p>
      <p>Rp 14.000/kg</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>
  </div>

  <div class="card">
    <img src="{{ asset('images/kentang.png') }}" alt="Gambar 3" class="card-image">
    <div class="card-content">
      <p>Kentang</p>
      <p>Rp 10.000/kg</p>
      <div class="quantity">
        <button class="btn-decrease">-</button>
        <span class="count">0</span>
        <button class="btn-increase">+</button>
      </div>
    </div>
  </div> 
</div>  --> 
</div>
</body>
</html>
