
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Asrama Papua | Masuk </title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css?v=3.2.0">
<script nonce="41ac6178-4a6b-44bc-9a53-4bce9d3e5b74">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<div class="login-box">
    <div class="login-logo">
    <h1><strong>Asrama Papua</strong></h1>
</div>

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Masuk!</p>
    <form action="{{ url('/login-pendaftaran') }}" method="post">
    @csrf
<div class="input-group mb-3">
    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Nama Pengguna" name="username" autofocus value="{{ old('username') }}">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>    
        </div>
    </div>
    @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="input-group mb-3">
    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Sandi" name="password">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror 
</div>
<div class="row">
    <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
    </div>
    <div>
        <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belum mendaftar?<a href="/register-pendaftaran" class="daftar"> Mendaftar sekarang!</a></small>        
    </div>
</div>
</form>
</div>
</div>


<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>

<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('/') }}dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
