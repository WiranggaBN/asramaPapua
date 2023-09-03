<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="logo.png">
    <link rel="icon" href="../logo.png">

    <!-- Crisp Live Chat -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a0873d52-24f4-4f69-b838-69d8172bbfb1";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- Bootstrap CSS --}}   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- Animate Style --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    {{-- My Style --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/masuk.css">
    <link rel="stylesheet" href="css/responsive.css">
    @stack('style')

    <title>Asrama Papua | {{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100">
        <div class="container">
          <a class="navbar-brand text-dark mb-4 mt-4" href="/beranda">
            <!-- <img src="../storage/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-center"> -->
            <b class="logo-awal">Asrama Papua</b>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">                
              <li class="nav-item">
                <a class="text-dark nav-link {{ Request::is('/bernda') ? 'active' : '' }}" aria-current="page" href="/bernda">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="text-dark nav-link dropdown-toggle {{ Request::is('sejarah', 'tentang') ? 'active' : '' }}" href="/profil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                  <li><a class="dropdown-item" href="/tatatertib">Tata Tertib</a></li>                  
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                </ul>
              </li>              
              <li class="nav-item dropdown">
                <a class="text-dark nav-link dropdown-toggle {{ Request::is('berita*', 'pengumuman*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="frontend/berita">Berita</a></li>  
                  <li><a class="dropdown-item" href="frontend/pengumuman">Pengumuman</a></li>
                  <li><a class="dropdown-item" href="/peta">Peta Lokasi</a></li>                
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="text-dark nav-link dropdown-toggle {{ Request::is('datakamar*', 'absensi*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Asrama
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/datakamar">Data Kamar</a></li>
                  <li><a class="dropdown-item" href="frontend/absensi">Absensi</a></li>                 
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('pemberkatannikah*', 'halpemberkatannikah*', 'penyerahananak*', 'halpenyerahananak*', 'baptisan*', 'penghiburan*', 'kunjungandoa*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  KAMI PEDULI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pemberkatannikah">Pemberkatan Nikah</a></li>
                  <li><a class="dropdown-item" href="/penyerahananak">Penyerahan Anak</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li><a class="dropdown-item" href="/baptisan">Baptisan</a></li>
                  <li><a class="dropdown-item" href="/penghiburan">Penghiburan</a></li>
                  <li><a class="dropdown-item" href="/kunjungandoa">Kunjungan Doa</a></li>                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('kegiatan*', 'ulangtahun*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BERITA
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/kegiatan">Kegiatan / Acara</a></li>
                  <li><a class="dropdown-item" href="/ulangtahun">Ulang Tahun</a></li>                 
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('persembahan') ? 'active' : '' }}" aria-current="page" href="/persembahan">PERSEMBAHAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('hubungikami') ? 'active' : '' }}" aria-current="page" href="/hubungikami">HUBUNGI KAMI</a>
              </li> -->
            </ul>
            <div>          
                <a href="/logout" class="text-decoration-none">
                  <button class="btn-masuk text-light nav-link {{ Request::is('keluar') ? 'active' : '' }}" aria-current="page">Keluar</button>
                </a>              
            </div> 
          </div>
        </div>
      </nav>
      {{-- Navbar --}}

      <div class="container">
        @yield('container')
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      @stack('scripts')
</body>
</html>