@extends('backend.layouts.main')

@section('isi') 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Penghuni</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/penghuni">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" autofocus required value="{{ old('name') }} ">
                    @error('name')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" required value="{{ old('email') }} ">
                    @error('email')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="Masukkan Nomor Telepon" name="nomor_telepon" required value="{{ old('nomor_telepon') }}" placeholder="Masukkan Nomor Telepon">
                    @error('nomor_telepon')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" required>
                      <label class="form-check-label me-5 ms-1" for="Laki-Laki"> Laki-Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                          
                      <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" required>
                      <label class="form-check-label ms-1" for="Perempuan"> Perempuan</label>   
                      @error('jenis_kelamin')
                        <div class="invalid-feedback">  
                          {{ $message }}
                        </div>
                      @enderror 
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="3" required value="{{ old('alamat') }}" placeholder="Masukkan Alamat"></textarea>
                      @error('alamat')
                          <div class="invalid-feedback">  
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="datetime-local" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" required>
                    @error('tanggal_lahir')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" placeholder="Masukkan Nama Ayah" name="nama_ayah" autofocus required value="{{ old('nama_ayah') }} ">
                    @error('nama_ayah')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nam_ibu">Nama Ibu</label>
                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"  name="nama_ibu" required value="{{ old('nama_ibu') }}" placeholder="Masukkan Nama Ibu">
                    @error('nama_ibu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>                                  
                  <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>                    
                    <select type="text" class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" id="pekerjaan_ayah" aria-label="Default select example" required >
                      <option selected>Masukkan Pekerjaan Ayah</option>
                      <option value="PNS">PNS</option>
                      <option value="Karyawan Swasta">Karyawan Swasta</option>
                      <option value="Tentara">Tentara</option>
                      <option value="Polisi">Polisi</option>
                      <option value="Dokter">Dokter</option>
                      <option value="Buruh<">Buruh</option>
                      <option value="Petani">Petani</option>
                      <option value="Nelayan">Nelayan</option>
                      <option value="Pilot">Pilot</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('pekerjaan_ayah')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>                    
                    <select type="text" class="form-select @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" id="pekerjaan_ibu" aria-label="Default select example" placeholder="Masukkan Pekerjaan Ibu" required>
                      <option selected>Masukkan Pekerjaan Ibu</option>
                      <option value="PNS">PNS</option>
                      <option value="Karyawan Swasta">Karyawan Swasta</option>
                      <option value="Tentara">Tentara</option>
                      <option value="Polisi">Polisi</option>
                      <option value="Dokter">Dokter</option>
                      <option value="Buruh<">Buruh</option>
                      <option value="Petani">Petani</option>
                      <option value="Nelayan">Nelayan</option>
                      <option value="Pilot">Pilot</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('pekerjaan_ibu')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>                  
                  <div class="form-group">
                    <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                    <input type="datetime-local" class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" required>
                    @error('tanggal_lahir_ayah')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                    <input type="datetime-local" class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" required>
                    @error('tanggal_lahir_ibu')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection