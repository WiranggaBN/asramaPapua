@extends('frontend.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Tata Tertib Asrama Papua</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-tatatertib">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                  
                    <h4 class="text-center">PASAL 1 KEWAJIBAN PENGHUNI</h4>
                    <ol>
                      <li>Membayar iuran.</li>
                      <li>Menjaga peralatan dan fasilitas Asrama.</li>
                      <li>Menggunakan listrik dan air sehemat mungkin.</li>
                      <li>Berpartisipasi aktif dalam kegiatan yang diadakan Asrama.</li>
                      <li>Menjaga kebersihan dan kerapian di lingkungan Asrama.</li>
                      <li>Memarkir kendaraan di tempat parkir dengan teratur dan rapi</li>
                      <li>Melaksanakan 5S di Asrama (Senyum, Salam, Sapa, Sopan, Santun).</li>
                      <li>Menunjukkan kartu pengenal pada security sebelum masuk Asrama.</li>
                      <li>Menjaga nama baik Asrama.</li>
                      <li>Mematuhi semua peraturan yang ada di Asrama.</li>                      
                    </ol>    
                    
                    <h4 class="text-center">PASAL 2 LARANGAN PENGHUNI</h4>
                    <ol>
                      <li>Membawa inventaris umum Asrama ke dalam kamar.</li>
                      <li>Menerima tamu di luar jam penerimaan tamu.</li>
                      <li>Tidur di kamar penghuni lain (terutama malam hari) kecuali ada ijin dari anggota kamar.</li>
                      <li>Mengganggu ketentraman penghuni lain.</li>
                      <li>Menerima tamu di sekitar Asrama atau di luar ruang tamu, jika masih ada tempat menerima tamu.</li>
                      <li>Dilarang makan makanan berat di ruang tamu.</li>
                      <li>Mengambil barang yang bukan miliknya.</li>
                      <li>Membawa, memakai narkotika dan obat-obatan terlarang, minuman keras, senjata tajam, senjata api dan sejenisnya.</li>
                      <li>Membawa dan mengedarkan gambar, rekaman VCD dan DVD porno.</li>
                      <li>Menyalakan pemutar audio/musik dan sejenisnya dengan volume tinggi yang mengganggu ketentraman asrama</li>                      
                    </ol>  

                    <h4 class="text-center">PASAL 3 JAM MALAM</h4>
                    <ol>
                      <li>Penghuni Asrama harus sudah berada di dalam Asrama maksimal pukul 22.00 WIB (sesuai waktu Asrama)</li>
                      <li>Batas maksimal rapat dan kepanitiaan pukul 22.00 WIB (waktu Asrama).</li>
                      <li>Bagi penghuni yang pulang kampung dan tiba di Asrama di atas pukul 22.00 WIB tetap dibukakan pintu.</li>                                          
                    </ol> 
                    
                    <h4 class="text-center">PASAL 4 SANKSI</h4>
                    <ol>
                      <li>Sanksi berupa sanksi ringan, sedang dan berat.</li>
                      <li>Sanksi ringan berupa peringatan, sanksi sedang berupa denda, sanksi berat berupa pengeluaran dari Asrama.</li>
                      <li>Bagi penghuni yang tiba di Asrama di atas pukul 22.00 – 04.30 WIB, tidak dipersilahkan masuk Asrama, kecuali telah mendapatkan ijin dari keamanan asrama.</li>
                      <li>Bagi penghuni yang merusak inventaris Asrama diwajibkan untuk memperbaiki atau menggantinya dan dikenai peringatan.</li>                                         
                    </ol>  

                    <h4 class="text-center">PASAL 5 PENETAPAN SANKSI</h4>
                    <ol>
                      <li>Sanksi ringan dan sedang ditetapkan oleh Pembina atas masukan dari pengurus.</li>
                      <li>Sanksi berat ditetapkan oleh pengelola Asrama atas usulan pengurus dan disetujui Pembina.</li>                                        
                    </ol>  

                    <h4 class="text-center">PASAL 6 LAIN-LAIN</h4>
                    <ol>
                      <li>Peraturan-peraturan yang belum tertera dalam pasal-pasal di atas akan ditentukan dalam ketentuan tersendiri.</li>
                      <li>Peraturan ini akan berlaku sejak ditetapkan sampai dibuatnya peraturan baru.</li>                                        
                    </ol> 
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