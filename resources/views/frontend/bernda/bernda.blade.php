@extends('frontend.layouts.main')

@section('container')
{{-- Slider Section --}}
<section id="slider">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 d-flex">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/image/Slider52.jpeg" class="d-flex" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/image/Slider4.jpg" class="d-flex" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/image/Slider3.jpg" class="d-flex" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Keep Update Section --}}
<section id="keep">
  <div class="container">
    <div class="row mt-5">      
    </div>
    <div class="row mt-5">
      <h2 class="text-dark text-center">Budaya Asrama Papua</h2>
      <div class="col-md-4 text-center">
        <div class="card-keep">          
          <a href="#" class="text-decoration-none">
          <h3 class="mt-4"><i class="icn fa fa-users"></i></h3>
          </a>
          <p class="mt-3">Berbaik sangka, senyum, bekerja sama, dan musyawarah.</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="card-keep">          
          <a href="#" class="text-decoration-none">
          <h3 class="mt-4"><i class="icn fa fa-tachometer"></i></h3>
          </a>
          <p class="mt-3">Disiplin waktu dan antri</p>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="card-keep">          
          <a href="#" class="text-decoration-none">
          <h3 class="mt-4"><i class="icn fa fa-recycle"></i></h3>
          </a>
          <p class="mt-3">Memungut, memilah, dan memanfaatkan sampah.</p>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- Keep Update Section --}}

{{-- Persembahan Section --}}
<section id="pers" class="overflow-hidden"> 
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>
          Berita Terbaru
        </h2>      
      </div>

      <div class="col-md-4 text-center">
        <div class="card-berit">
          <div class="position-relative mx-auto">
            <a href="#">
            <img src="/image/1.jpg" alt=""
            class="position-absolute top-50 start-50 translate-middle">
            </a>
          </div>
          
        </div>
      </div> 
      
      <div class="col-md-4 text-center">
        <div class="card-berit">
          <div class="position-relative mx-auto">
            <a href="#">
            <img src="/image/2.jpg" alt=""
            class="position-absolute top-50 start-50 translate-middle">
            </a>
          </div>
          
        </div>
      </div> 

      <div class="col-md-4 text-center">
        <div class="card-berit">
          <div class="position-relative mx-auto">
            <a href="#">
            <img src="/image/3.jpg" alt=""
            class="position-absolute top-50 start-50 translate-middle">
            </a>
          </div>
         
        </div>
      </div> 
      
    </div>
  </div> 
</div>
</section>
{{-- Persembahan Section --}}

{{-- KPK Section --}}
<section id="peta">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="/image/Peta.png" alt="" class="img-peta">
      </div>
    </div>
  </div>
</section>
{{-- KPK Section --}}

<footer class="footer d-flex align-items-center position-relative">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-12 align-items-center">
          <img src="logo.png" alt="" width="100" height="100" class="ogol">
        </div> -->
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
@endsection


