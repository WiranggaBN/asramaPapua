@extends('frontend.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Data Kamar</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-sejarah">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                  
                    <p>
                    Asrama Telkom University memiliki letak yang sangat strategis karena dekat dengan gedung kuliah umum (Gd. Tokong Nanas 10 lantai). Asrama ini menjadi salah satu sarana kampus yang dibangun untuk tempat tinggal Mahasiswa/i baru pada 1 tahun pertama masa perkuliahan di Telkom University sehingga para orang tua tidak perlu khawatir meninggalkan putra dan putri untuk melanjutkan studinya.
                    </p>
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