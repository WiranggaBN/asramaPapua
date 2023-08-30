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
                <h3 class="card-title">Tambah Data Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="nomor_kamar">Nomor Kamar</label>
                    <input type="nomor_kamar" class="form-control @error('nomor_kamar') is-invalid @enderror" id="nomor_kamar" placeholder="Masukkan Nomor Kamar" name="nomor_kamar" autofocus required value="{{ old('nomor_kamar') }} ">
                    @error('nomor_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar</label>
                    <input type="nama_kamar" class="form-control @error('nama_kamar') is-invalid @enderror" id="nama_kamar" placeholder="Masukkan Nama Kamar" name="nama_kamar" autofocus required value="{{ old('nama_kamar') }} ">
                    @error('nama_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kapasitas_kamar">Kapasitas Kamar</label>
                    <input type="kapasitas_kamar" class="form-control @error('kapasitas_kamar') is-invalid @enderror" id="kapasitas_kamar" placeholder="Masukkan Kapasitas Kamar" name="kapasitas_kamar" autofocus required value="{{ old('kapasitas_kamar') }} ">
                    @error('kapasitas_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="aset">Aset Kamar</label>
                    <input type="aset" class="form-control @error('aset') is-invalid @enderror" id="aset" placeholder="Masukkan Aset Kamar" name="aset" autofocus required value="{{ old('aset') }} ">
                    @error('aset')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_penghuni">Nama Penghuni</label>
                    <input type="nama_penghuni" class="form-control @error('nama_penghuni') is-invalid @enderror" id="nama_penghuni" placeholder="Masukkan Nama Penghuni" name="nama_penghuni" autofocus required value="{{ old('nama_penghuni') }} ">
                    @error('nama_penghuni')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="status_kamar">Status Kamar</label>
                      <select name="status_kamar" class="form-control">
                        <option value="">Pilih Status Kamar</option>                                    
                        <option value="Penuh">Penuh</option>
                        <option value="Belum Penuh">Belum Penuh</option>
                      </select>
                    @error('status_kamar')
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

@endsection