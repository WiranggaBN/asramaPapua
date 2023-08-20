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
                <h3 class="card-title">Tambah Absensi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kamar</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Kamar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Keluar</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Keluar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Masuk</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Masuk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam Keluar</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jam Keluar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam Masuk</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jam Masuk">
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alasan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alasan">
                  </div>   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan">
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