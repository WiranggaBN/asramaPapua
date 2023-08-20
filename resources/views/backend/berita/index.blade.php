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
          <h3 class="card-title">Data Berita</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/berita/create" class="btn btn-primary">Tambah Berita</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Slug</th>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Gambar</th>
              <th scope="col">Kutipan</th>
              <th scope="col">Isi</th>                            
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
</div>
@endsection

