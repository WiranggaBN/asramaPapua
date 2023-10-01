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
                <h3 class="card-title">Ubah Absensi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/absensi/{{ $absensi->name }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <!-- <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" autofocus required value="{{ old('name', $absensi->name) }} ">
                    @error('name')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kamar_id">Nama Kamar</label>
                    <input type="kamar_id" class="form-control @error('kamar_id') is-invalid @enderror" id="kamar_id" placeholder="Masukkan Nama Kamar" name="kamar_id" required value="{{ old('kamar_id', $absensi->kamar_id) }} ">
                    @error('kamar_id')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>                
                <div class="form-group">
                    <label for="tanggal_keluar">Tanggal Keluar</label>
                    <input type="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar" placeholder="Masukkan Tanggal Keluar" name="tanggal_keluar" required value="{{ old('tanggal_keluar', $absensi->tanggal_keluar) }} ">
                    @error('tanggal_keluar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div> -->
                  <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Datang</label>
                    <input type="datetime-local" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" id="tanggal_masuk" required>
                    @error('tanggal_masuk')
                      <div class="invalid-feedback">  
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <!-- <div class="form-group">
                    <label for="jam_keluar">Jam Keluar</label>
                    <input type="jam_keluar" class="form-control @error('jam_keluar') is-invalid @enderror" id="jam_keluar" placeholder="Masukkan Jam Keluar" name="jam_keluar" required value="{{ old('jam_keluar', $absensi->jam_keluar) }} ">
                    @error('jam_keluar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div> -->
                  <div class="form-group">
                    <label for="jam_masuk">Jam Datang</label>
                    <input type="jam_masuk" class="form-control @error('jam_masuk') is-invalid @enderror" id="jam_masuk" placeholder="Masukkan Jam Masuk" name="jam_masuk" required value="{{ old('jam_masuk', $absensi->jam_masuk) }} ">
                    @error('jam_masuk')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <!-- <div class="form-group">
                    <label for="alasan">Alasan</label>
                    <input type="alasan" class="form-control @error('alasan') is-invalid @enderror" id="alasan" placeholder="Masukkan Jam Keluar" name="alasan" required value="{{ old('alasan', $absensi->alasan) }} ">
                    @error('alasan')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div> -->
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukkan Jam Keluar" name="keterangan" required value="{{ old('keterangan', $absensi->keterangan) }} ">
                    @error('keterangan')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                  </div>    
                <div class="form-group">
                    <label for="validasi">Validasi</label>
                      <select name="validasi" class="form-control @error('validasi') is-invalid @enderror" value="{{ old('validasi') }}">
                        <option value="">Pilih Validasi</option>                                    
                        <option value="Benar">Benar</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    @error('validasi')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>   
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