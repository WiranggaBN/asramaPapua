@extends('frontend.layouts.main')

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
<section id="content-sejarah" >
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
        <div class="mt-3">
          <h3 class="text-dark text-decoration-none">
            {{ $berita->judul }}
          </h3>
          <p><small>{{ $berita->date }}</small></p>
          <p>Ayat Pokok : <b> {{ $berita->main_verse }} </b></p>
          <p>Pembicara : <b> {{ $berita->speaker }} </b></p>
          <hr>
          {{-- <img src="https://source.unsplash.com/1200x300?{{ $berita->excerpt }}" class="card-img-top mb-2" alt="{{ $berita->slug }}"> --}}
          
          {!! $berita->body !!}
        </div>
        
        {{-- </div>
        <div class="mt-5">
          <h3 class="text-dark text-decoration-none">
            {{ $materipengajaran->title }}
          </h3>
          <hr>
          <img src="../kpk6.jpg" alt="" class="gambarsatu mt-2"><br>
          <p class="mt-2 text-center">{{ $materipengajaran->title_image }}</p>
          {!! $materipengajaran->body !!}
        </div> --}}      
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