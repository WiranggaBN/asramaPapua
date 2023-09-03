@extends('capeg.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Pengumuman</h4>
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
        <div class="mt-4">

          @if ($pengumuman->count())
          <div class="card mb-3">
            {{-- <img src="https://source.unsplash.com/1200x300/?{{ $pengumuman[0]->title }}" class="card-img-top" alt="..."> --}}
            {{-- <img src="https://source.unsplash.com/1200x300?spiritual" class="card-img-top" alt="{{ $pengumuman[0]->slug }}"> --}}
            <div class="card-body text-center">
              <h3 class="card-title"><a href="/pengumuman/{{ $pengumuman[0]->slug }}" class="text-decoration-none text-dark">{{ $pengumuman[0]->title }}</a></h3>
              <p class="text-center"><small>{{ $pengumuman[0]->date }}</small></p>
              <p class="card-text">{{ $pengumuman[0]->excerpt }}</p>
              <p class="card-text"><small class="text-muted">Last updated {{ $pengumuman[0]->created_at->diffForHumans() }}</small></p>
              <a href="/pengumuman/{{ $pengumuman[0]->slug }}" class="text-decoration-none btn text-light"> Baca Selengkapnya</a>
            </div>
          </div>  
          @else
          <p class="card-text fs-4">Belum ada Pengumuman.</p>
          @endif

          
          <div class="container">
            <div class="row">
              @foreach ($pengumuman->skip(1) as $post)
              <div class="col-md-4 mb-3">
                <div class="card">
                  {{-- <img src="https://source.unsplash.com/300x200?{{ $post->excerpt }}" class="card-img-top" alt="{{ $post->slug }}"> --}}
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{ $pengumuman[0]->created_at->diffForHumans() }}</small></p>
                    <a href="/pengumuman/{{ $post->slug }}" class="btn text-light">Baca Selengkapnya</a>
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
          <div class="col-md-12 align-items-center">
            <img src="logo.png" alt="" width="100" height="100" class="ogol">
          </div>
          <a href="#" class="ng text-center">Gereja Segala Bangsa Malinau Kota</a>
          
          <div class="papa col-md-3 mt-3 d-flex align-items-center justify-content-evenly">
            <a href="https://www.instagram.com/gesbamalkot/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCukPPZ6Gr-lpiwjrl-EJlWw" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/people/GESBA-Malinau-Kota/100088256063650/?mibextid=ZbWKwL" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="#hubungi" target="_blank"><i class="bi bi-envelope-fill"></i></a>
          </div>          
        </div>
        <hr class="grs">
        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="cp col-12">
            <p>Copyright by Yusri Mandi Pakiding All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
{{-- Footer Section --}}
@endsection