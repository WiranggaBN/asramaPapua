@extends('backend.layouts.main')

@section('isi')
<div class="col-12">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
</div>

<div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kamar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/kamar/create" class="btn btn-primary">Tambah Data Kamar</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nomor Kamar</th>
              <th scope="col">Nama Kamar</th>
              <th scope="col">Kapasitas Kamar</th>
              <th scope="col">Aset Kamar</th>
              <th scope="col">Nama Penghuni</th>
              <th scope="col">Status Kamar</th>                            
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
</div>
@endsection

