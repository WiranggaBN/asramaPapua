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
              <form method="post" action="/kamar">
                @csrf
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
                    <input type="nama_kamar" class="form-control @error('nama_kamar') is-invalid @enderror" id="nama_kamar" placeholder="Masukkan Nama Kamar" name="nama_kamar" required value="{{ old('nama_kamar') }} ">
                    @error('nama_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kapasitas_kamar">Kapasitas Kamar</label>
                    <input type="kapasitas_kamar" class="form-control @error('kapasitas_kamar') is-invalid @enderror" id="kapasitas_kamar" placeholder="Masukkan Kapasitas Kamar" name="kapasitas_kamar" required value="{{ old('kapasitas_kamar') }} ">
                    @error('kapasitas_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="aset">Aset Kamar</label>
                    <input type="aset" class="form-control @error('aset') is-invalid @enderror" id="aset" placeholder="Masukkan Aset Kamar" name="aset" required value="{{ old('aset') }} ">
                    @error('aset')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penghuni_id">Nama Penghuni</label>
                    <select name="penghuni_id" class="form-control @error('penghuni_id') is-invalid @enderror" value="{{ old('penghuni_id') }}">                                        
                     <option value="">Pilih Penghuni</option>                                        
                      @foreach ($penghunis as $penghuni)
                        <option value="{{ $penghuni->id }}">{{ $penghuni->name }}</option>
                      @endforeach
                    </select>
                    @error('penghuni_id')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="status_kamar">Status Kamar</label>
                      <select name="status_kamar" class="form-control @error('status_kamar') is-invalid @enderror" value="{{ old('status_kamar') }}">
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