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
                    <label for="kapasitas">Kapasitas Kamar</label>
                      <select name="kapasitas" class="form-control @error('kapasitas') is-invalid @enderror" value="{{ old('kapasitas', $kamar->kapasitas) }}">
                        <option value="">Pilih Status Kamar</option>                                    
                        <option value="1" {{($kamar->kapasitas === '1') ? 'Selected' : ''}}>1</option>
                        <option value="2" {{($kamar->kapasitas === '2') ? 'Selected' : ''}}>2</option>
                        <option value="3" {{($kamar->kapasitas === '3') ? 'Selected' : ''}}>3</option>
                      </select>
                    @error('kapasitas')
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
                    <label for="penghunisatu">Penghuni Satu</label>
                    <input type="penghunisatu" class="form-control @error('penghunisatu') is-invalid @enderror" id="penghunisatu" placeholder="Masukkan Aset Kamar" name="penghunisatu" required value="{{ old('penghunisatu', $kamar->penghunisatu) }} ">
                    @error('penghunisatu')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penghunidua">Penghuni Dua</label>
                    <input type="penghunidua" class="form-control @error('penghunidua') is-invalid @enderror" id="penghunidua" placeholder="Masukkan Aset Kamar" name="penghunidua" required value="{{ old('penghunidua', $kamar->penghunidua) }} ">
                    @error('penghunidua')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penghunitiga">Penghuni Tiga</label>
                    <input type="penghunitiga" class="form-control @error('penghunitiga') is-invalid @enderror" id="penghunitiga" placeholder="Masukkan Aset Kamar" name="penghunitiga" required value="{{ old('penghunitiga', $kamar->penghunitiga) }} ">
                    @error('penghunitiga')
                    <div class="invalid-feedback">  
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="status_kamar">Status Kamar</label>
                      <select name="status_kamar" class="form-control @error('status_kamar') is-invalid @enderror" value="{{ old('status_kamar', $kamar->nomor_kamar) }}">
                        <option value="">Pilih Status Kamar</option>                                    
                        <option value="Penuh" {{($kamar->status_kamar === 'Penuh') ? 'Selected' : ''}}>Penuh</option>
                        <option value="Belum Penuh" {{($kamar->status_kamar === 'Belum Penuh') ? 'Selected' : ''}}>Belum Penuh</option>
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