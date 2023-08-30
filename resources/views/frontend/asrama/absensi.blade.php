@extends('frontend.layouts.main')

@section('container')
{{-- hero section --}}
<section id="sejarah">
    <div class="container-fluid overlay h-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Absensi</h4>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- hero section --}}

{{-- Content Section --}}
<section id="content-baptisan">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="datadiri col-md-12 mt-4">
                  <div class="col-4">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
          
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                      {{ session('loginError') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                  </div>                  
                  <form class="row g-3" method="post" action="/absensi">
                    @csrf
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" required autofocus value="{{ old('name') }}">
                      @error('name')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Nama Kamar</label>
                      <input type="text" name="nama_kamar" class="form-control @error('nama_kamar') is-invalid @enderror" id="nama_kamar" placeholder="" required value="{{ old('nama_kamar') }}">
                      @error('nama_kamar')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="join" class="form-label">Tanggal Keluar</label>
                          <input type="datetime-local" class="form-control @error('tanggal_keluar') is-invalid @enderror" name="tanggal_keluar" id="tanggal_keluar" required>
                          @error('tanggal_keluar')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="col-6">
                      <label for="join" class="form-label">Tanggal Masuk</label>
                          <input type="datetime-local" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" id="tanggal_masuk" required>
                          @error('tanggal_masuk')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Jam Keluar</label>
                      <input type="text" name="phone" class="form-control @error('jam_keluar') is-invalid @enderror" id="jam_keluar" placeholder="" required value="{{ old('jam_keluar') }}">
                      @error('jam_keluar')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputNama" class="form-label">Jam Masuk</label>
                      <input type="text" name="jam_masuk" class="form-control @error('jam_masuk') is-invalid @enderror" id="jam_masuk" placeholder="" required value="{{ old('jam_masuk') }}">
                      @error('jam_masuk')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>                                                         
                                                          
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Alasan</label>                      
                      <textarea class="form-control @error('alasan') is-invalid @enderror" name="alasan" id="alasan" rows="3" required value="{{ old('alasan') }}"></textarea>
                      @error('alasan')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Keterangan</label>                      
                      <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" rows="3" required value="{{ old('keterangan') }}"></textarea>
                      @error('keterangan')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="confirm-next mb-3" style="display :block;">
                      <button class="btn btn-primary btn-block visible-sm visible-xs submit mb-4 mt-3"><i class="bi bi-send me-1"></i> SUBMIT</button>
                    </div>
                  </form>                    
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