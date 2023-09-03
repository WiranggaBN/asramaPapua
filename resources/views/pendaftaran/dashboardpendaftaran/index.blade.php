@extends('pendaftaran.layouts.main')

@section('isi')
<div class="card">
        <div class="card-header">
          <h3 class="card-title fw-bold fs-2">Selamat Datang, {{ $user->name }}</h3>

          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
          <div class="alert alert-success">
            <p>
            Calon Penghuni yang ingin mendaftarkan diri di Asrama Papua, dapat mengisi kelengkapan data diri dan data orang tua pada masing-masing menu.
            </p>
          </div>
        </div>

        
        <!-- <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Pembicara</th>
              <th scope="col">Tema</th>
              <th scope="col">Hari Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Tempat</th>
              <th scope="col">Alamat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table> -->
      </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
</div>
@endsection

