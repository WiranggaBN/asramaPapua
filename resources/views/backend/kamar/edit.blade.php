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
                <h3 class="card-title">Ubah Data Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/kamar/{{ $kamar->namakamar }}" enctype="multipart/form-data">
            @method('put')
            @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="nomor_kamar">Nomor Kamar</label>
                    <input type="nomor_kamar" class="form-control @error('nomor_kamar') is-invalid @enderror" id="nomor_kamar" placeholder="Masukkan Nomor Kamar" name="nomor_kamar" autofocus required value="{{ old('nomor_kamar', $kamar->nomor_kamar) }} ">
                    @error('nomor_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namakamar">Nama Kamar</label>
                    <input type="namakamar" class="form-control @error('namakamar') is-invalid @enderror" id="namakamar" placeholder="Masukkan Nama Kamar" name="namakamar" required value="{{ old('namakamar', $kamar->namakamar) }} ">
                    @error('namakamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kapasitas_kamar">Kapasitas Kamar</label>
                    <input type="kapasitas_kamar" class="form-control @error('kapasitas_kamar') is-invalid @enderror" id="kapasitas_kamar" placeholder="Masukkan Kapasitas Kamar" name="kapasitas_kamar" required value="{{ old('kapasitas_kamar', $kamar->kapasitas_kamar) }} ">
                    @error('kapasitas_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="aset_kamar">Aset Kamar</label>
                    <input type="aset_kamar" class="form-control @error('aset_kamar') is-invalid @enderror" id="aset_kamar" placeholder="Masukkan Aset Kamar" name="aset_kamar" required value="{{ old('aset_kamar', $kamar->aset_kamar) }} ">
                    @error('aset_kamar')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penghuni_id">Nama Penghuni</label>
                    <select name="penghuni_id" class="form-control @error('penghuni_id') is-invalid @enderror" value="{{ old('penghuni_id', $kamar->penghuni_id) }}">                                        
                     <option value="">Pilih Penghuni</option>                                        
                      @foreach ($penghuni as $penghunis)
                        <option value="{{ $penghunis->id }}">{{ $penghunis->name }}</option>
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
                      <select name="status_kamar" class="form-control @error('status_kamar') is-invalid @enderror" value="{{ old('status_kamar', $kamar->nomor_kamar) }}">
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