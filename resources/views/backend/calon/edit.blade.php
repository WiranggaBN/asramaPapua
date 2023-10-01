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
                <h3 class="card-title">Ubah Calon Penghuni</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/calon/{{ $calonPenghuni->name }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" autofocus required value="{{ old('name', $calonPenghuni->name) }} ">
                    @error('name')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Nama" name="username" required value="{{ old('username', $calonPenghuni->username) }} ">
                    @error('username')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" required value="{{ old('email', $calonPenghuni->email) }} ">
                    @error('email')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="Masukkan Nomor Telepon" name="nomor_telepon" required value="{{ old('nomor_telepon', $calonPenghuni->nomor_telepon) }}" placeholder="Masukkan Nomor Telepon">
                    @error('nomor_telepon')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"  name="nik" required value="{{ old('nik', $calonPenghuni->nik) }}" placeholder="Masukkan NIK">
                    @error('nik')
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
                    <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" required value="{{ old('alamat', $calonPenghuni->alamat) }} ">
                    @error('alamat')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required value="{{ old('tanggal_lahir', $calonPenghuni->tanggal_lahir) }} ">
                    @error('tanggal_lahir')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" placeholder="Masukkan Nama Ayah" name="nama_ayah" required value="{{ old('nama_ayah', $calonPenghuni->nama_ayah) }} ">
                    @error('nama_ayah')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nam_ibu">Nama Ibu</label>
                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"  name="nama_ibu" required value="{{ old('nama_ibu', $calonPenghuni->nama_ibu) }}" placeholder="Masukkan Nama Ibu">
                    @error('nama_ibu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>    
                  <div class="form-group">
                    <label for="telpon_ortu">Telpon Orangtua</label>
                    <input type="text" class="form-control @error('telpon_ortu') is-invalid @enderror" id="telpon_ortu"  name="telpon_ortu" required value="{{ old('telpon_ortu', $calonPenghuni->telpon_ortu) }}" placeholder="Masukkan Telpon Orang Tua">
                    @error('telpon_ortu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>                
                  <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                      <select name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" value="{{ old('pekerjaan_ayah', $calonPenghuni->pekerjaan_ayah) }}">
                        <option value="">Pilih Pekerjaan Ayah</option>                                    
                        <option value="PNS" {{($calonPenghuni->pekerjaan_ayah === 'PNS') ? 'Selected' : ''}}>PNS</option>
                        <option value="Karyawan Swasta" {{($calonPenghuni->pekerjaan_ayah === 'Karyawan Swasta') ? 'Selected' : ''}}>Karyawan Swasta</option>
                        <option value="PNS" {{($calonPenghuni->pekerjaan_ayah === 'PNS') ? 'Selected' : ''}}>PNS</option>
                        <option value="Karyawan Swasta" {{($calonPenghuni->pekerjaan_ayah === 'Karyawan Swasta') ? 'Selected' : ''}}>Karyawan Swasta</option>
                        <option value="Tentara" {{($calonPenghuni->pekerjaan_ayah === 'Tentara') ? 'Selected' : ''}}>Tentara</option>
                        <option value="Polisi" {{($calonPenghuni->pekerjaan_ayah === 'Polisi') ? 'Selected' : ''}}>Polisi</option>
                        <option value="Dokter" {{($calonPenghuni->pekerjaan_ayah === 'Dokter') ? 'Selected' : ''}}>Dokter</option>
                        <option value="Buruh" {{($calonPenghuni->pekerjaan_ayah === 'Buruh') ? 'Selected' : ''}}>Buruh</option>
                        <option value="Petani" {{($calonPenghuni->pekerjaan_ayah === 'Petani') ? 'Selected' : ''}}>Petani</option>
                        <option value="Nelayan" {{($calonPenghuni->pekerjaan_ayah === 'Nelayan') ? 'Selected' : ''}}>Nelayan</option>
                        <option value="Pilot" {{($calonPenghuni->pekerjaan_ayah === 'Pilot') ? 'Selected' : ''}}>Pilot</option>
                        <option value="Lainnya" {{($calonPenghuni->pekerjaan_ayah === 'Lainnya') ? 'Selected' : ''}}>Lainnya</option>
                      </select>
                    @error('pekerjaan_ayah')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>                                    
                  <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                      <select name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" value="{{ old('pekerjaan_ibu', $calonPenghuni->pekerjaan_ibu) }}">
                        <option value="">Pilih Pekerjaan Ibu</option>                                    
                        <option value="PNS" {{($calonPenghuni->pekerjaan_ibu === 'PNS') ? 'Selected' : ''}}>PNS</option>
                        <option value="Karyawan Swasta" {{($calonPenghuni->pekerjaan_ibu === 'Karyawan Swasta') ? 'Selected' : ''}}>Karyawan Swasta</option>
                        <option value="PNS" {{($calonPenghuni->pekerjaan_ibu === 'PNS') ? 'Selected' : ''}}>PNS</option>
                        <option value="Karyawan Swasta" {{($calonPenghuni->pekerjaan_ibu === 'Karyawan Swasta') ? 'Selected' : ''}}>Karyawan Swasta</option>
                        <option value="Tentara" {{($calonPenghuni->pekerjaan_ibu === 'Tentara') ? 'Selected' : ''}}>Tentara</option>
                        <option value="Polisi" {{($calonPenghuni->pekerjaan_ibu === 'Polisi') ? 'Selected' : ''}}>Polisi</option>
                        <option value="Dokter" {{($calonPenghuni->pekerjaan_ibu === 'Dokter') ? 'Selected' : ''}}>Dokter</option>
                        <option value="Buruh" {{($calonPenghuni->pekerjaan_ibu === 'Buruh') ? 'Selected' : ''}}>Buruh</option>
                        <option value="Petani" {{($calonPenghuni->pekerjaan_ibu === 'Petani') ? 'Selected' : ''}}>Petani</option>
                        <option value="Nelayan" {{($calonPenghuni->pekerjaan_ibu === 'Nelayan') ? 'Selected' : ''}}>Nelayan</option>
                        <option value="Pilot" {{($calonPenghuni->pekerjaan_ibu === 'Pilot') ? 'Selected' : ''}}>Pilot</option>
                        <option value="Lainnya" {{($calonPenghuni->pekerjaan_ibu === 'Lainnya') ? 'Selected' : ''}}>Lainnya</option>
                      </select>
                    @error('pekerjaan_ibu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>                   
                  <div class="form-group">
                    <label for="alamat_ortu">Alamat Orang Tua</label>
                    <input type="text" class="form-control @error('alamat_ortu') is-invalid @enderror" id="alamat_ortu"  name="alamat_ortu" required value="{{ old('alamat_ortu', $calonPenghuni->alamat_ortu) }}" placeholder="Masukkan Alamat Orang Tua">
                    @error('alamat_ortu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div> 
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

@endsection