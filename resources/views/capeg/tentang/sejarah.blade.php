@extends('capeg.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Sejarah</h4>
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
                    Asrama papua yang berlokasi di jalan Tegal Wareng 3, Candi, Kecamatang Candisari, Kota Semarang Jawa Tengah ini sudah berdiri sekitar 60 tahun tepatnya pada tahun 1963. Saat ini asrama Papua dibina oleh seorang tokoh yang sangat berperan dalam membina mahasiswa Papua yang ada di Semarang bernama Sam Wakum. Sam Wakum adalah orang asli papua yang berdomisili di Semarang.  Sam Wakum sudah mengelola asrama Papua sejak tahun 90-an. Sam Wakum pun menjelaskan awal terbentuknya asrama Papua ini merupakan pemberian atau hadiah dari almarhum Presiden RI Soekarno waktu integrasi Irian Barat pada tahun 1963. 
                    </p>
                    <p>Asrama Papua yang bermukim di Semarang saling berkomitmen antara warga dan penghuni asrama Papua bahwa asrama Papua merupakan bagian integral dari bangsa dan negara yang menjadikan asrama Papua sebagai nilai historis yang menguatkan komitmen kebersamaan dan persaudaraan dalam Bhinneka Tunggal Ika.
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