@extends('capeg.layouts.main')

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
                <img src="/image/Slider1.jpg" class="d-flex" alt="...">
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

{{-- KPK Section --}}
<!-- <section id="kpk">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="judulkpk mt-4">Kabar Penganten Kristus</h2>
        <span class="subtitle-kpk">“Hendaklah kamu sempurna, sama seperti Bapa di Surga sempurna” <br> (Matius 5:48)</span>
      </div>
    </div>
  </div>
</section> -->
{{-- KPK Section --}}

{{-- Keep Update Section --}}
<section id="keep">
  <div class="container">
    <div class="row">      
    </div>
    <div class="row mt-4">
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
          Galeri
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <img src="/image/Peta.png" alt="" class="img-peta">
      </div>
    </div>
  </div>
</section>
{{-- KPK Section --}}

{{-- Hubungi Section --}}
<!-- <section id="hubungi">
  <div class="container-fluid overlay h-100">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Butuh Layanan..? 
            Silahkan kontak kami
            Kami Siap Melayani
          </h3>
          <div class="hubungi">
            <h6>Hubungi</h6>
            <div class="mb-3 d-flex align-items-center">
              <div>
                <img src="lokasi.png" alt="">
              </div>
              <a href="#">Jl. Pelajar Pejuang Malinau Kota 
                Indonesia</a>
            </div>
            <div class="mb-3">
              <img src="telpon.png" alt="">
              <a href="#">022-6545-2041</a>
            </div>
            <div class="mb-3">
              <img src="email.png" alt="">
              <a href="#">gesbamalkot@gmail.com</a>
            </div>
          </div>
          <h6>Media Sosial</h6>
            <a href="#" class="me-3"><img src="fb.png" alt=""></a>
            <a href="#" class="me-3"><img src="twitter.png" alt=""></a>
            <a href="#" class="me-3"><img src="ig.png" alt=""></a>
            <a href="#" class="link-malkot">Gesba Malkot</a>
        </div>
        <div class="col-md-6">
          <div class="card-hubungi w-100">
            <form action="">
              <h2>ada pertanyaan..?</h2>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda..</label>
              </div>
              <button class="button-hubungi" type="submit">
                Kirim
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
{{-- Hubungi Section --}}

{{-- Hubungi2 Section --}}
<!-- <section id="hubungi2">
  <div class="container overlay h-100">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h2 class="judulhubungi2 mt-4">Hubungi Kami</h2>
          <span class="subtitle-hubungi2">GESBA Malinau Kota Jl. Pasar Induk Gang Gesba RT.20, Kec. Malinau Kota, Kabupaten Malinau, Kalimantan Utara 77554</span>
        </div>
        <div class="section-body mt-5 mb-5">
          <form method="POST" action="modul/forms/contact/act.php?modul=contact&amp;action=insert" id="form_contact" novalidate="novalidate">
              <div class="row">
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" name="nama">
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" class="form-control" name="alamat">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>No. Telp / Whatsapp</label>
                          <input type="text" class="form-control telp" name="telp" maxlength="14">
                      </div>
                  </div>
                  <div class="col-xs-12 col-md-6 mt-3">
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email">
                      </div>
                  </div>
              </div>
              <div class="form-group mt-3">
                  <label>Pesan</label>
                  <textarea class="form-control" rows="5" name="message"></textarea>
              </div>
              {{-- <div class="alert alert-danger errormsg mt-3 text-center" id="form_contact_error">Periksa Kembali Data Yang Diinput</div> --}}
              <div class="text-center mt-5">
                  <button class="btn btn-primary m-t-15 btn-rounded">
                      <span class="btn-label">
                          <i class="fa fa-paper-plane"></i>
                      </span> Kirim
                  </button>
              </div>
          </form>
      </div>
      </div>
    </div>
  </div>
</section> -->
{{-- Hubungi2 Section --}}

<footer class="footer-beranda d-flex align-items-center position-relative">
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


