@extends('capeg.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Berita</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-berita" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mt-4">

          @if ($brita->count())
          <div class="card mb-3">
            <div style="max-height: 350px; overflow:hidden;">
            @if($brita[0]->gambar)
              <img src="{{ asset('storage/' . $brita[0]->gambar) }}" class="card-img-top" alt="...">
            @else
              <img src="https://source.unsplash.com/1200x300/?{{ $brita[0]->judul }}" class="card-img-top" alt="...">
            @endif
            </div>
            
            
            <div class="card-body text-center">
              <h3 class="card-title"><a href="/brita/{{ $brita[0]->slug }}" class="text-decoration-none text-dark">{{ $brita[0]->judul }}</a></h3>
              <p class="text-center"><small>{{ dateID($brita[0]->tanggal) }}</small></p>
              <p class="card-text">{{ $brita[0]->kutipan }}</p>
              <p class="card-text"><small class="text-muted">Last updated {{ $brita[0]->created_at->diffForHumans() }}</small></p>
              <a href="/informasi/berita/{{ $brita[0]->slug }}" class="text-decoration-none btn text-light"> Baca Selengkapnya</a>
            </div>
          </div>  
          @else
          <p class="card-text fs-4">Belum ada Berita.</p>
          @endif

          
          <div class="container">
            <div class="row">
              @foreach ($brita->skip(1) as $brita)
              <div class="col-md-4 mb-3">
                <div class="card">
                @if($brita->gambar)
                  <img src="{{ asset('storage/' . $brita->gambar) }}" class="card-img-top" alt="...">
                @else
                  <img src="https://source.unsplash.com/1200x300/?{{ $brita[0]->judul }}" class="card-img-top" alt="...">
                @endif
                  <div class="card-body">
                    <h5 class="card-title">{{ $brita->judul }}</h5>
                    <p class="card-text">{{ $brita->kutipan }}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{ $brita->created_at->diffForHumans() }}</small></p>
                    <a href="/brita/{{ $brita->slug }}" class="btn text-light">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
{{-- Content Section --}}

{{-- Footer Section --}}
<section id="footer-sejarah">
  <footer class="footer d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">        
          <a href="#" class="ng text-center"><h3>Asrama Papua</h3></a>
          
          <div class="papa col-md-3 mt-3 d-flex align-items-center justify-content-evenly">
            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="#" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#" target="_blank"><i class="bi bi-envelope-fill"></i></a>
          </div>          
        </div>
        <hr class="grs">
        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="cp col-12">
            <p>Copyright @ 2023 Asrama Papua.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
{{-- Footer Section --}}
@endsection