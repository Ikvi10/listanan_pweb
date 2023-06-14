<html>
<head>
    <title>List Belanja</title>
    <link href="{{ asset('css/list.css') }}" rel="stylesheet">
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
<div class="content">


</div>
</body>
</html>