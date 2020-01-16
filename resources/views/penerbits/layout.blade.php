<!DOCTYPE html>
<html>
<head>
    <title>formpenerbit.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<div class="container">
  <a class="navbar-brand" href="">Perpus Digital ala Donnix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/perpustakaan_laravel/public/siswas">Siswa <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/perpustakaan_laravel/public/penerbits">Penerbit</a>
      <a class="nav-item nav-link" href="http://localhost/perpustakaan_laravel/public/books">Buku</a>
      <a class="nav-item nav-link" href="http://localhost/perpustakaan_laravel/public/logins" onClick="return confirm('apakah anda yakin ingin Logout?')">Logout</a>
    </div>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
</div>
</body>
</html>